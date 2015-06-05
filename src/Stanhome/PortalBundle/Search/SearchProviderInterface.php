<?php

namespace Stanhome\PortalBundle\Search;

interface  SearchProviderInterface {
    public function search($searchString, $maxNbResponses);
    public function render($searchString, $maxNbResponses);
} 