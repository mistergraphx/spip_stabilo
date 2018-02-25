<?php
/**
 * Utilisations de pipelines par Stabilo
 *
 * @plugin     Stabilo
 * @copyright  2017
 * @author     Mist. GraphX
 * @licence    GNU/GPL
 * @package    SPIP\Stabilo\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function porte_plume_intertitres_ieconfig_metas($table){
	$table['stabilo']['titre'] = _T('stabilo:stabilo_titre');
	$table['stabilo']['icone'] = 'prive/themes/spip/images/stabilo-16.png';
	$table['stabilo']['metas_serialize'] = 'stabilo';
	return $table;
}


// http://www.spip-contrib.net/Porte-Plume-documentation-technique
function stabilo_porte_plume_barre_pre_charger($barres){
	$barre = &$barres['edition'];

	$barre->ajouterApres('header1', array(
			"id"=> 'stabilo',
			"name"=> _T('stabilo:outil_stabilo'),
			"className"=> 'stabilo',
			"dropMenu" => array(
				array(
					"id"			=> 'stabilo1',
					"name"		=> _T('stabilo:outil_stabilo1'),
					"className"=> 'stabilo1',
					"openWith"=>"[* ",
					"closeWith"=>" ]",
					"display"     => true,
					"selectionType" => "word",
				),
				array(
					"id"			=> 'stabilo2',
					"name"		=> _T('stabilo:outil_stabilo2'),
					"className"=> 'stabilo2',
					"openWith"=>"[** ",
					"closeWith"=>" ]",
					"display"     => true,
					"selectionType" => "word",
				),
				array(
					"id"			=> 'stabilo3',
					"name"		=> _T('stabilo:outil_stabilo3'),
					"className"=> 'stabilo3',
					"openWith"=>"[*** ",
					"closeWith"=>" ]",
					"display"     => true,
					"selectionType" => "word",
				)
			)
	));

	return $barres;
}


function stabilo_porte_plume_lien_classe_vers_icone($flux){
	$icones = array(
		'stabilo' => array('stabilo.png','0'),
 		'stabilo1' => array('stabilo1.png','0'),
		'stabilo2' => array('stabilo2.png','0'),
		'stabilo3' => array('stabilo3.png','0')
	);

	return array_merge($flux, $icones);
}
