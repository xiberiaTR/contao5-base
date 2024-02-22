<?php

declare (strict_types = 1);

namespace trdev\ContaoAmaltisBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use trdev\ContaoAmaltisBundle\ContaoAmaltisBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoAmaltisBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
