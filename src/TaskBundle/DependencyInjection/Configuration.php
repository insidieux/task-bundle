<?php

namespace TaskBundle\DependencyInjection;

use \Symfony\Component\Config\Definition\Builder\TreeBuilder;
use \Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 *
 * @package TaskBundle\DependencyInjection
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder;
        $rootNode = $treeBuilder->root('task', 'array');
        $rootNode
            ->children()
            ->arrayNode('namespaces')
            ->prototype('scalar')->end()
            ->end();
        $rootNode
            ->children()
            ->booleanNode("debug")
            ->defaultFalse()
            ->end();

        return $treeBuilder;
    }
}
