<?php

namespace DomiGestion\PortalBundle;

use DomiGestion\PortalBundle\DependencyInjection\Compiler\SearchCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class DomiGestionPortalBundle
 * @package DomiGestion\PortalBundle
 */
class DomiGestionPortalBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container) {
        parent::build($container);

        $container->addCompilerPass(new SearchCompilerPass());
    }
}
