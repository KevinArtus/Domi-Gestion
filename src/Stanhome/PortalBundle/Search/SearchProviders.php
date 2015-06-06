<?php

namespace Stanhome\PortalBundle\Search;

class SearchProviders {
	private $searchProviders;

	public function __construct() {
		$this->searchProviders = array();
	}

	public function addProvider(SearchProvider $searchProvider, $searchName) {
		if (array_key_exists($searchName, $this->searchProviders))
			throw new \Exception("Search provider '" . $searchName . "'' is already defined !");

		$this->searchProviders[$searchName] = $searchProvider;
	}

	public function getProviders() {
		return $this->searchProviders;
	}
}