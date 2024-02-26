<?php

/**
 * Contao Open Source CMS
 *
 * @author    Jimmy Nogherot
 * @license   Payant
 * @copyright Tabula Rasa
 */

use xiberiaTR\ContaoAmaltisBundle\Classes\TypeChamp;
use Contao\DC_Table;
use Contao\System;
use Contao\CoreBundle\Security\ContaoCorePermissions;
use Contao\StringUtil;
use Contao\Image;
use Contao\Backend;




$t = basename(__FILE__, '.php');

/**
 * Table tl_bien
 */
$GLOBALS['TL_DCA'][$t] = array(

    // Config
    'config'      => array(
        'dataContainer'    => DC_Table::class,
        'enableVersioning' => false, //True si tu veux du versionning
        'sql'              => array(
            'keys' => array(
                'id' => 'primary',
            ),
        ),
    ),

    // List
    'list'        => array(
        'sorting'           => array(
            'mode'        => 1,
            'fields'      => array('tstamp'),
            'panelLayout' => 'filter;sort,search,limit',
            'flag'        => 12, //https://docs.contao.org/dev/reference/dca/fields/#reference
        ),
        'label'             => array(
            'fields'      => array('name'),
            'showColumns' => false,
        ),
        'global_operations' => array(
            'all' => array(
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset();" accesskey="e"',
            ),
        ),
        'operations'        => array(
            'edit'   => array(
                'label' => &$GLOBALS['TL_LANG'][$t]['edit'],
                'href'  => 'act=edit',
                'icon'  => 'edit.gif',
            ),
            'copy'   => array(
                'label' => &$GLOBALS['TL_LANG'][$t]['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif',
            ),
            'delete' => array(
                'label'      => &$GLOBALS['TL_LANG'][$t]['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"',
            ),
            'toggle' => array
			(
				'href'                => 'act=toggle&amp;field=published',
				'icon'                => 'visible.svg',
				'button_callback'     => array('tl_base', 'toggleIcon')
			),
            'show'   => array(
                'label' => &$GLOBALS['TL_LANG'][$t]['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif',
            ),
        ),
    ),

    // Select
    'select'      => array(
        'buttons_callback' => array(),
    ),

    // Edit
    'edit'        => array(
        'buttons_callback' => array(),
    ),

    // Palettes
    'palettes'    => array(
        '__selector__' => array(''),
        'default'      => 'name,published,bio,produitPhare,description'
    ),

    // Subpalettes
    'subpalettes' => array(
        '' => 'text',
    ),

    // Fields
    'fields'      => array(
        'id'          => array(
            'sql' => "int(10) unsigned NOT NULL auto_increment",
        ),
        'tstamp'      => array(
            'sql' => "int(10) unsigned NOT NULL default '0'",
        ),
        'name' => TypeChamp::text(true),
        'published' => TypeChamp::ouiNon(),
        'bio' => TypeChamp::ouiNon(),
        'produitPhare' => TypeChamp::ouiNon(),
        'description'     => TypeChamp::textarea(true),
    ),
);


class tl_base extends Backend
{
/**
	 * Return the "toggle visibility" button
	 *
	 * @param array  $row
	 * @param string $href
	 * @param string $label
	 * @param string $title
	 * @param string $icon
	 * @param string $attributes
	 *
	 * @return string
	 */
    public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
    {
        // Permission check example (adapt based on your actual permission system)
        if (!System::getContainer()->get('security.helper')->isGranted(ContaoCorePermissions::USER_CAN_EDIT_FIELD_OF_TABLE, 'tl_base::published')) {
            return '';
        }
    
        $href .= '&amp;id=' . $row['id'];
    
        // Toggle icon based on the published state
        if (!$row['published']) {
            $icon = 'invisible.svg';
        } else {
            $icon = 'visible.svg'; // Ensure you have a 'visible.svg' icon
        }
    
        $titleDisabled = (is_array($GLOBALS['TL_DCA']['tl_base']['list']['operations']['toggle']['label']) && isset($GLOBALS['TL_DCA']['tl_comments']['list']['operations']['toggle']['label'][2])) ? sprintf($GLOBALS['TL_DCA']['tl_comments']['list']['operations']['toggle']['label'][2], $row['id']) : $title;

		return '<a href="' . $this->addToUrl($href) . '" title="' . StringUtil::specialchars($row['published'] ? $title : $titleDisabled) . '" data-title="' . StringUtil::specialchars($title) . '" data-title-disabled="' . StringUtil::specialchars($titleDisabled) . '" data-action="contao--scroll-offset#store" onclick="return AjaxRequest.toggleField(this,true)">' . Image::getHtml($icon, $label, 'data-icon="visible.svg" data-icon-disabled="invisible.svg" data-state="' . ($row['published'] ? 1 : 0) . '"') . '</a> ';
    }

}
