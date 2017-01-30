<?php

namespace Stanhome\PortalBundle\Search;

/**
 * Class SearchProviders
 * @package Stanhome\PortalBundle\Search
 */
class SearchProviders {
	private $searchProviders;

    /**
     * SearchProviders constructor.
     */
	public function __construct() {
		$this->searchProviders = array();
	}

    /**
     * @param SearchProvider $searchProvider
     * @param $searchName
     * @throws \Exception
     */
	public function addProvider(SearchProvider $searchProvider, $searchName) {
		if (array_key_exists($searchName, $this->searchProviders))
			throw new \Exception("Search provider '" . $searchName . "'' is already defined !");

		$this->searchProviders[$searchName] = $searchProvider;
	}

    /**
     * @return array
     */
	public function getProviders() {
		return $this->searchProviders;
	}
}
