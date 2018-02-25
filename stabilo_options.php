<?php
/**
 * Options au chargement du plugin Stabilo
 *
 * @plugin     Stabilo
 * @copyright  2017
 * @author     Mist. GraphX
 * @licence    GNU/GPL
 * @package    SPIP\Stabilo\Options
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function stabilo_colors(){
	$stablilo_colors = array(
		'stabilo1'=> array(
				'label'=> 'Description de la couleure de surlignage 1',
				'background'=> '#9e9e9e',
				'foreground'=> '#000000',
		),
		'stabilo2'=> array(
				'label'=> 'Description de la couleure de surlignage 1',
				'background'=> '#ffeb3b',
				'foreground'=> '#000000',
		),
		'stabilo3'=> array(
				'label'=> 'Description de la couleure de surlignage 1',
				'background'=> '#e44b7f',
				'foreground'=> '#000000',
		),
	);
	return $stablilo_colors;
}


// Ajout des raccourcis dans la liste des wheels
$GLOBALS['spip_wheels']['raccourcis'][] = 'stabilo.yaml';
