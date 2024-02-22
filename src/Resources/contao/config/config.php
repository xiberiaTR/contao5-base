<?php

/**
 * Contao Open Source CMS
 *
 *
 * @package   Fonctions Contao
 * @author    Jimmy Nogherot
 * @license   Not free
 * @copyright Tabula Rasa
 */

use trdev\ContaoAmaltisBundle\Element\ceBase;
use trdev\ContaoAmaltisBundle\Module\beBaseModel;

/**
 * Insert Tags
 */
//use trdev\ContaoAmaltisBundle

$GLOBALS['assetsFolder']['ContaoAmaltisBundle']    = "/bundles/contaoamaltis/";
$GLOBALS['bundleNamespace']['ContaoAmaltisBundle'] = "trdev\\ContaoAmaltisBundle\\";

$helpers = $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . "helpers/";

//$exp = new cocciExport();
//$exp->exec();

//$GLOBALS['TL_CSS'][] = $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . "css/be.css";

//$GLOBALS['TL_JAVASCRIPT'][] = $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . "js/full/be.js";
//$GLOBALS['TL_JAVASCRIPT'][] = ($_ENV['APP_ENV'] == "dev") ? $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . 'js/full/chat.js' : $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . 'js/chat.min.js';
//$GLOBALS['TL_JAVASCRIPT'][] = ($_ENV['APP_ENV'] == "dev") ? $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . 'js/full/tickets.js' : $GLOBALS['assetsFolder']['ContaoAmaltisBundle'] . 'js/tickets.min.js';
//
//$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array(AjaxTickets::class, 'pageLoad');
//$GLOBALS['TL_HOOKS']['processFormData'][]        = array(TicketsFormSubmit::class, 'saveSubmission');

//$GLOBALS['FE_MOD']['Tabularasa']['Tabularasa-loader'] = loaderModule::class;

array_insert($GLOBALS['TL_CTE']['Tickets'], 1, array(
    'ceBase' => ceBase::class,
    //'Biens'        => ceBien::class,
    //'Pieces'       => cePiece::class,
    //'Liens'        => ceLien::class,
    //'Mandats'      => ceMandat::class,
    //'Recherche'    => ceRechercheBien::class,
    //'FicheVitrine' => ceFicheVitrine::class,
    //'Impression'   => ceImpression::class,
    //'BonVisite'    => ceBonVisite::class,
));

//Menu BE
array_insert($GLOBALS['BE_MOD']['groupe'], 98, array(
    'table' => array(
        'tables' => array('tl_base'),
    ),
    'module'    => array(
        'callback'         => beBaseModel::class,
        'hideInNavigation' => true,
    ),
));
