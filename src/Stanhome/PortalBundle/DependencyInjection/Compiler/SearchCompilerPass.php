<?php

namespace Stanhome\PortalBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

class SearchCompilerPass implements CompilerPassInterface {

    public function process(ContainerBuilder $container) {
        if (!$container->hasDefinition('fime.portal.search.search_providers'))
            return;

        $definition = $container->getDefinition('fime.portal.search.search_providers');
        $taggedServices = $container->findTaggedServiceIds('fime_search.provider');

        foreach ($taggedServices as $id => $tagAttributes) {
            foreach ($tagAttributes as $attributes) {
                $definition->addMethodCall(
                    'addProvider',
                    array(new Reference($id), $attributes["searchName"])
                );
            }
        }
    }
}