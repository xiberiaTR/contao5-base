<?php

declare (strict_types = 1);

namespace trdev\ContaoAmaltisBundle;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use trdev\ContaoAmaltisBundle\ContaoAmaltisBundle;

class ContaoManagerPlugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoAmaltisBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
