<?php

namespace Stanhome\PortalBundle\Search;

use Elastica\Query\QueryString;

class SearchProvider {
	private $searchService;
	private $fields;
	private $repository;
	private $linkShow;
	private $pathHeaderTranslation;
	private $iconLabel;

	public function __construct($searchService, $fields, $repository, $linkShow, $pathHeaderTranslation, $iconLabel) {
		$this->searchService = $searchService;
		$this->fields = $fields;
		$this->repository = $repository;
		$this->linkShow = $linkShow;
		$this->pathHeaderTranslation = $pathHeaderTranslation;
		$this->iconLabel = $iconLabel;
	}

	public function search($searchString, $limitNumber = null) {
		$searchQuery = new QueryString();
		$searchQuery->setQuery($searchString)->setDefaultOperator('AND')->setFields($this->fields);

		$repository = $this->searchService->getRepository($this->repository);

		if ($limitNumber !== null)
			return $repository->find($searchQuery, $limitNumber);

		return $repository->find($searchQuery);
	}

	public function getLinkShow() {
		return $this->linkShow;
	}

	public function getPathHeaderTranslation() {
		return $this->pathHeaderTranslation;
	}

	public function getIconLabel() {
		return $this->iconLabel;
	}
}