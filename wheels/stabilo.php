<?php
/**
 * Callbacks Stabilo
 *
 * @plugin     Stabilo
 * @copyright  2018
 * @author     Mist. GraphX
 * @licence    GNU/GPL
 * @package    SPIP\Stabilo\wheels
 */


if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

// @see http://zone.spip.org/trac/spip-zone/browser/_plugins_/todo/trunk/wheels/todo.php
// @see http://lumadis.be/regex/test_regex.php
// Extraction de lignes du texte
// La wheel renvoie un tableau à cette callback qui est le résultat d'un preg_match_all.
// Le contenu du tableau est le suivant :
// 0 - la chaine complète
// 1 - le level *
// 2 - le contenu
// 3 - le groupe fermant
function stabilo($t){

	spip_log('Stabilo_Wheel : '.$t,'stabilo');

	$color= strlen($t[1]);
	$class= 'stabilo'.$color;
	$stabilo_colors = lire_config('stabilo');

	($label=$stabilo_colors[$class]['label']) ? $label = "aria-label=\"$label\""  : $label=false;
	$html = "<span class=\"stabilo $class\" $label>".$t[2]."</span>";
	return $html;
}
