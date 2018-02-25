<?php

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function formulaires_configurer_stabilo_charger_dist(){
    $valeurs = array();
    $stabilo_colors = lire_config('stabilo');
    foreach($stabilo_colors as $color => $value){
      $valeurs[] = array(
        $color.'_label'=> $value['label'],
        $color.'_background'=> $value['background'],
        $color.'_foreground'=> $value['background'],
      );
    }
    return $valeurs;
}

function formulaires_configurer_stabilo_traiter_dist(){
  $res = array();
  $config = array();
  $stabilo_colors = lire_config('stabilo');
  foreach($stabilo_colors as $color => $value){
    $config[$color] = array(
        'label'=> _request($color.'_label'),
        'background'=> _request($color.'_background'),
        'foreground'=> _request($color.'_foreground'),
    );
  }

  if ($config = ecrire_config('stabilo',$config)) {
    $res['message_ok'] = "La configuration a été mise a jour";
  }else{
    $res['message_erreur'] = "Un probleme a été rencontré, impossible d'enregistrer votre saisie";
  }

  return $res;

}
