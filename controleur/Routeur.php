
<?php
require_once 'controleur/ControleurAccueil.php';
require_once 'controleur/ControleurAbsence.php';
require_once 'vue/Vue.php';

class Routeur {

  private $ctrlAccueil;
  private $ctrlAbsence;

  public function __construct() {
    $this->ctrlAccueil = new ControleurAccueil();
    $this->ctrlAbsence = new ControleurAbsence();
  }

public function routerRequete() {
try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'absence') {
      require 'vue/vueAvantAbsence.php';
      $this->ctrlAbsence->SaisieAbsence();
    }
    if ($_GET['action'] == 'liste') {
      $this->ctrlAbsence->apresSaisie();
    }
  }
  else {
    $this->ctrlAccueil->accueil();  // action par défaut
  }
}
catch (Exception $e) {
    $this->erreur($e->getMessage());
  
}
}
// Affiche une erreur
private function erreur($msgErreur) {
  $vue = new Vue("Erreur");
  $vue->generer(array('msgErreur' => $msgErreur));
}
}