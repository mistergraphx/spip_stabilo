<?php
if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function stabilo_upgrade($nom_meta_base_version, $version_cible) {

	// Création du tableau des mises à jour.
	$maj = array();

	$config = stabilo_colors();

	// Tableau de la configuration par défaut
	$maj['0.0.1'] = array(
		array('ecrire_config', 'stabilo', $config)
	);

	// Maj du plugin.
	include_spip('base/upgrade');
	maj_plugin($nom_meta_base_version, $version_cible, $maj);
}

/*
 *   Désintaller
 */
function stabilo_vider_tables($nom_meta_base_version) {
	// Supprimer les méta, ou oublie pas celle de la base.
	effacer_meta('stabilo');
	effacer_meta($nom_meta_base_version);
}
