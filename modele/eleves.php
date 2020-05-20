<?php

require_once 'modele/Modele.php';

class Eleves extends Modele {

  // Renvoie la liste de tous les élèves
  public function getEleves(){

$sql='select nom,prenom,cne,etat from eleves';

$eleves = $this->executerRequete($sql);
return $eleves;

}

  
}