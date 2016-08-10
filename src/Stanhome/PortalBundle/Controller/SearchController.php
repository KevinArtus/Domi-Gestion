<?php

namespace Stanhome\PortalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Stanhome\PortalBundle\Search\SearchProvider;

/**
 * Class SearchController
 * @package Stanhome\PortalBundle\Controller
 */
class SearchController extends Controller {

	/**
	 * @Route("/search/{fields}/{modes}/{searchString}", requirements={"fields"="(\[\d+\])?[a-zA-Z]+(\[\d+\])?(,[a-zA-Z]+(\[\d+\])?)*", "modes"="[a-zA-Z0-9_]+(,[a-zA-Z0-9_]+)*"}, name="portal_search")
	 * @Method({"GET"})
	 */
	public function searchAction($fields, $modes, $searchString)
    {
		// Retrieve the modes
		$arrayModes = explode(',', $modes);

//		// Retrieve the max number of responses
//		if (preg_match('/^\[(\d+)\]/', $fields, $matches))
//			$maxNbResponses = $matches[1];
//		else
//			$maxNbResponses = self::$defaultMaxNbResponses;

		// Run the parsing of fields
		preg_match_all('/([a-zA-Z]+)(?:\[(\d+)\])?/', $fields, $matches, PREG_SET_ORDER);

		// Retrieve the search providers
		$providers = $this->get("fime.portal.search.search_providers")->getProviders();

		// Retrieve all requested providers name and their weight
		$requestedProviders = array();

		foreach ($matches as $match) {
			$requestedProviderName = $match[1];

			if ($requestedProviderName === "all" && count($matches) === 1) {
				foreach ($providers as $providerName => $provider)
					$requestedProviders[$providerName] = 1;

				break;
			}

			if (!array_key_exists($requestedProviderName, $providers))
				throw new \Exception("The search provider '". $requestedProviderName ."' does not exist !");

			if (array_key_exists($requestedProviderName, $requestedProviders))
				throw new \Exception("The search provider '". $requestedProviderName ."' is already requested !");

			if (array_key_exists(2, $match))
				$requestedProviderWeight = $match[2];
			else
				$requestedProviderWeight = 1;

			$requestedProviders[$requestedProviderName] = $requestedProviderWeight;
		}

		// Search for results and shrink (to fit the max number of results and the weight of each search provider)     /!\ TO IMPROVE /!\
		$resSearch = array();

		foreach ($requestedProviders as $providerName => $providerWeight) {
			$provider = $providers[$providerName];
			$resProvider = $provider->search($searchString, 5);

			$resSearch[$providerName] = $resProvider;
		}

		// Create the array that will be returned
		$res = array();

		foreach ($resSearch as $providerName => $providerResults) {
			if (empty($providerResults))
				continue;

			$provider = $providers[$providerName];

			$resProvider = array();
			$resProvider['title'] = $this->get('translator')->trans($provider->getPathHeaderTranslation());
			$resProvider['icon'] = $provider->getIconLabel();

			$arrayData = array();			
			foreach ($providerResults as $providerResult) {
				$arrayDataTmp = array();

				$arrayDataTmp['label'] = $providerResult->__toString();		

				foreach ($arrayModes as $mode) {
					if ($mode === 'url') {
						$arrayDataTmp['url'] = $this->getShowURL($provider, $providerResult);
						continue;						
					}

					$entityVariables = $this->getEntityVariables(array($mode), $providerResult);
					$arrayDataTmp[$mode] = $entityVariables[$mode];
				}				

				$arrayData[] = $arrayDataTmp;
			}
			$resProvider['data'] = $arrayData;

			$res[] = $resProvider;
		}

		// Return
		return new JsonResponse($res);
	}

    /**
     * @param SearchProvider $searchProvider
     * @param $entityToShow
     * @return string
     * @throws \Exception
     */
	private function getShowURL(SearchProvider $searchProvider, $entityToShow)
    {
		$router = $this->get('router');
		$linkShow = $searchProvider->getLinkShow();

		$route = $router->getRouteCollection()->get($linkShow);
		if (!$route)
			throw new \Exception("The route '". $linkShow ."' does NOT exist");
			
		$variables = $route->compile()->getVariables();
		$arrayProperties = $this->getEntityVariables($variables, $entityToShow);

		return $router->generate($linkShow, $arrayProperties);
	}

    /**
     * @param $variables
     * @param $entity
     * @return array
     * @throws \Exception
     */
	private function getEntityVariables($variables, $entity)
    {
		$reflexionEntity = new \ReflectionObject($entity);
		$arrayProperties = array();

		foreach ($variables as $variableName) {
			if ($reflexionEntity->hasProperty($variableName)) {
				$reflexionProperty = $reflexionEntity->getProperty($variableName);
				$reflexionProperty->setAccessible(true);

				$variableValue = $reflexionProperty->getValue($entity);
				$arrayProperties[$variableName] = $variableValue;

				continue;
			}

			$entityMethods = $reflexionEntity->getMethods();
			foreach ($entityMethods as $entityMethod) {
				$methodName = strtolower($entityMethod->getName());
				$expectedMethodName = "get".$variableName;

				if ($methodName===$expectedMethodName && $entityMethod->getNumberOfParameters()===0) {
					$entityMethod->setAccessible(true);

					$variableValue = $entityMethod->invoke($entity);
					$arrayProperties[$variableName] = $variableValue;

					break;
				}
			}

			if (!array_key_exists($variableName, $arrayProperties))
				throw new \Exception("The property '". $variableName ."' does NOT exist in '". get_class($entity) ."'");
		}
		return $arrayProperties;
	}
}
