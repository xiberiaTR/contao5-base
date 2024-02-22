<?php

declare (strict_types = 1);

namespace trdev\ContaoAmaltisBundle;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use trdev\ContaoAmaltisBundle\ContaoAmaltisBundle;

class ContaoManagerPlugin implements BundlePluginInterface, RoutingPluginInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function getBundles(ParserInterface $parser)
	{
		return [
			BundleConfig::create(ContaoAmaltisBundle::class)
				->setLoadAfter([ContaoCoreBundle::class])
				->setReplace(['contao-amaltis']),
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function getRouteCollection(LoaderResolverInterface $resolver, KernelInterface $kernel)
	{
		return $resolver
			->resolve(__DIR__.'/Resources/config/routing.yml')
			->load(__DIR__.'/Resources/config/routing.yml')
		;
	}
}