<?php

namespace DomiGestion\PortalBundle\Search;

/**
 * Interface SearchProviderInterface
 * @package DomiGestion\PortalBundle\Search
 */
interface  SearchProviderInterface {
    public function search($searchString, $maxNbResponses);
    public function render($searchString, $maxNbResponses);
}
