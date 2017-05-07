<?php

namespace ScayTrase\Symfony\Issue21369\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\DefinitionDecorator;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

final class Issue21369Extension extends Extension
{
    /** {@inheritdoc} */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('config.yml');

        $decorator = new DefinitionDecorator('scaytrase.issue_21369.original');
        $decorator->replaceArgument(0, 'baz');
        $container->setDefinition('scaytrase.issue_21369.child', $decorator);
    }
}
