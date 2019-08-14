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

// Ajout des raccourcis dans la liste des wheels
$GLOBALS['spip_wheels']['raccourcis'][] = 'stabilo.yaml';
