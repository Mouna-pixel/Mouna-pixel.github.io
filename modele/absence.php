<?php

require_once 'modele/Modele.php';

class absence extends Modele {

  //Renvoie la liste des absences 
  public function getAbsence(){
    
    $sql = 'select cne_etud,Matiere,Horaire,etat_just,date_absence from absence';
    $absence = $this->executerRequete($sql);
    return $absence;
     }


  public function saisirAbsence(){
        $cne=$_POST['cne'];
        $datee=$_POST['date'];
        $horaire=$_POST['horaire'];
        $mati=$_POST['mati'];
        $etat=$_POST['etat'];
        $requete="INSERT INTO absence(Matiere, date_absence, Horaire, etat_just, cne_etud) VALUES ('$mati','$datee','$horaire','$etat', '$cne')";
        $saisie=$this->executerRequete($requete);
        $request="UPDATE eleves SET nbr_absences=nbr_absences+1 WHERE CNE='$cne'";
        $incremente=$this->executerRequete($request);
        
          }

}