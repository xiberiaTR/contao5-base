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

use xiberiaTR\ContaoAmaltisBundle\Element\ceBase;
use xiberiaTR\ContaoAmaltisBundle\Module\beBaseModel;
use Contao\CoreBundle\Controller\BackendCsvImportController;


// Back end modules
$GLOBALS['BE_MOD']['content']['amaltis'] = array
(
	'tables'      => array('tl_base'),
    'table'       => array(BackendCsvImportController::class, 'importTableWizardAction'),
	'list'        => array(BackendCsvImportController::class, 'importListWizardAction')
);

/**
 * Insert Tags
 */
//use xiberiaTR\ContaoAmaltisBundle

$GLOBALS['assetsFolder']['ContaoAmaltisBundle']    = "/bundles/contaoamaltis/";
$GLOBALS['bundleNamespace']['ContaoAmaltisBundle'] = "xiberiaTR\\ContaoAmaltisBundle\\";

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

// if (!is_array($GLOBALS['TL_CTE']['Tickets'])) {
//     $GLOBALS['TL_CTE']['Tickets'] = array();
// }
// if (!is_array($GLOBALS['BE_MOD']['groupe'])) {
//     $GLOBALS['BE_MOD']['groupe'] = array();
// }

// array_splice($GLOBALS['TL_CTE']['Tickets'], 1, 0, array(
//     'ceBase' => ceBase::class,
//     'Biens'        => ceBien::class,
//     'Pieces'       => cePiece::class,
//     'Liens'        => ceLien::class,
//     'Mandats'      => ceMandat::class,
//     'Recherche'    => ceRechercheBien::class,
//     'FicheVitrine' => ceFicheVitrine::class,
//     'Impression'   => ceImpression::class,
//     'BonVisite'    => ceBonVisite::class,
// ));

//Menu BE
// array_splice($GLOBALS['BE_MOD']['groupe'], 98, 0, array(
//     'table' => array(
//         'tables' => array('tl_base'),
//     ),
//     'module' => array(
//         'callback' => beBaseModel::class,
//         'hideInNavigation' => true,
//     ),
// ));
