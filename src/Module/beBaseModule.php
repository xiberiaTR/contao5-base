<?php

namespace xiberiaTR\ContaoBaseBundle\Module;

use xiberiaTR\ContaoBaseBundle\Model\MessageModel;
use xiberiaTR\ContaoBaseBundle\Model\TicketModel;

class beBaseModule extends \BackendModule
{
    protected $strTemplate = 'be_base_module';

    protected function compile()
    {
        $this->import('BackendUser', 'User');
        $objTemplate        = new \BackendTemplate('be_wildcard');
        $rt                 = new \RequestToken();
        $this->Template->rt = $rt->get();
    }
}

class_alias(beBaseModule::class, 'beBaseModule');
