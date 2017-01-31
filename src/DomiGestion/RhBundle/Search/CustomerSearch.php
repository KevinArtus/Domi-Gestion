<?php

namespace DomiGestion\RhBundle\Search;

use Elastica\Query\QueryString;
use DomiGestion\PortalBundle\Search\SearchProviderInterface;

/**
 * Class CustomerSearch
 * @package DomiGestion\RhBundle\Search
 */
class CustomerSearch implements SearchProviderInterface {
    private $templateService;
    private $searchService;

    public function __construct($templateService, $searchService) {
        $this->templateService = $templateService;
        $this->searchService = $searchService;
    }

    public function search($searchString, $maxNbResponses) {
        $searchQuery = new QueryString();
        $searchQuery->setQuery($searchString)->setFields(array('nom'));

        $repository = $this->searchService->getRepository('DomiGestionRhBundle:Customer');

        return $repository->find($searchQuery, $maxNbResponses);
    }

    public function render($searchString, $maxNbResponses) {
        $customers = $this->search($searchString, $maxNbResponses);

        return $this->templateService->render("DomiGestionRhBundle:Customer:searchLi.html.twig", array("customers" => $customers));
    }
}
