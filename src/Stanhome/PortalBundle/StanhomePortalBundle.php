<?php

namespace Stanhome\PortalBundle;

use Stanhome\PortalBundle\DependencyInjection\Compiler\SearchCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class StanhomePortalBundle
 * @package Stanhome\PortalBundle
 */
class StanhomePortalBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container) {
        parent::build($container);

        $container->addCompilerPass(new SearchCompilerPass());
    }
}
