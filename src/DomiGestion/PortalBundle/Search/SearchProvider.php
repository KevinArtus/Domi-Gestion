<?php

namespace DomiGestion\PortalBundle\Search;

use Elastica\Query\QueryString;

/**
 * Class SearchProvider
 * @package DomiGestion\PortalBundle\Search
 */
class SearchProvider {
	private $searchService;
	private $fields;
	private $repository;
	private $linkShow;
	private $pathHeaderTranslation;
	private $iconLabel;

    /**
     * SearchProvider constructor.
     * @param $searchService
     * @param $fields
     * @param $repository
     * @param $linkShow
     * @param $pathHeaderTranslation
     * @param $iconLabel
     */
	public function __construct($searchService, $fields, $repository, $linkShow, $pathHeaderTranslation, $iconLabel) {
		$this->searchService = $searchService;
		$this->fields = $fields;
		$this->repository = $repository;
		$this->linkShow = $linkShow;
		$this->pathHeaderTranslation = $pathHeaderTranslation;
		$this->iconLabel = $iconLabel;
	}

    /**
     * @param $searchString
     * @param null $limitNumber
     * @return mixed
     */
	public function search($searchString, $limitNumber = null) {
		$searchQuery = new QueryString();
		$searchQuery->setQuery($searchString)->setDefaultOperator('AND')->setFields($this->fields);

		$repository = $this->searchService->getRepository($this->repository);

		if ($limitNumber !== null)
			return $repository->find($searchQuery, $limitNumber);

		return $repository->find($searchQuery);
	}

    /**
     * @return mixed
     */
	public function getLinkShow() {
		return $this->linkShow;
	}

    /**
     * @return mixed
     */
	public function getPathHeaderTranslation() {
		return $this->pathHeaderTranslation;
	}

    /**
     * @return mixed
     */
	public function getIconLabel() {
		return $this->iconLabel;
	}
}
