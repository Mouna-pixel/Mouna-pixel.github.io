<?php

require_once 'modele/eleves.php';
require_once 'vue/Vue.php';

class ControleurAccueil {

  private $eleve;

  public function __construct() {
    $this->eleve = new Eleves();
  }

  // Affiche la liste de tous les billets du blog
  public function accueil() {
    $eleves= $this->eleve->getEleves();
    $vue = new Vue("Acceuil");
    $vue->generer(array('eleves' => $eleves));
  }
  // Affiche une erreur
  public function erreur($msgErreur) {
    require 'vue/vueErreur.php';
  }

}