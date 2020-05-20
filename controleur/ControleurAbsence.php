<?php

require_once 'modele/eleves.php';
require_once 'modele/absence.php';
require_once 'vue/Vue.php';

class ControleurAbsence {

  private $eleve;
  private $absence;

  public function __construct() {
    $this->eleve = new Eleves();
    $this->absence = new absence();
  }
  public function SaisieAbsence(){
    if (isset($_POST['send'])) {  
        
        $this->absence->saisirAbsence();
    }
  }
    // Affiche les absences
    public function apresSaisie() {
    $abs=$this->absence->getAbsence();//fction qui retourne les infos des élèves
    $vue = new Vue("ApresAbsence");
    $vue->generer(array('abs' => $abs));
}


// Affiche une erreur
    public function erreur($msgErreur) {
    require 'vue/vueErreur.php';
  }


}