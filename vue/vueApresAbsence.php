<!--code d'affichage-->
<!-- ici j'ai enlevé tout ce qui est global ( commun entre toutes les pages possibles) et qui est mis ds gabarit.php-->

<?php $this->titre = "Gestion des absences"; ?>
<link rel="stylesheet"  href="contenu/styleapres.css" />
<center>
<h1>Liste des élèves</h1>

<table>

<tr>

<td>CNE</td>

<td>Matiere</td>

<td>Horaire</td>

<td>Date</td>

<td>Etat_justificatif</td>

</tr>

<?php

foreach ($abs as $absent) {

$et="";

$lien="";

if($absent["etat_just"]=="true")

{
/*
$et="active";

$lien="activer.php?cne=".$absent["cne_etud"]."&etat_just=false";
*/
}

else

{

/*$et="desactive";

$lien="activer.php?cne=".$absent["cne_etud"]."&etat_just=true";*/

}

?>
<!-- <div class="tableau"> le problème est a cause de cette div il faut remplacer dans la feuille de style .tableau par tableu seulement sans .  -->

<tr>

<td><?php echo $absent["cne_etud"]; ?></td>

<td><?php echo $absent["Matiere"]; ?></td>

<td><?php echo $absent["Horaire"]; ?></td>

<td><?php echo $absent["date_absence"]; ?></td>

<td><?php echo $absent["etat_just"]; ?></td>

<td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td>

</tr>
<!-- </div> -->

<?php

}

?>
</table> <!-- le probleme est résolu -->
</center>


