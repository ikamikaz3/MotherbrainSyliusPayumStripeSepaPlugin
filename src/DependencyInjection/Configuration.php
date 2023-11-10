<?php

declare(strict_types=1);

namespace Motherbrain\SyliusPayumStripeSepaPlugin\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('motherbrain_sylius_payum_stripe_sepa_plugin');
        $rootNode = $treeBuilder->getRootNode();

        return $treeBuilder;
    }
}
