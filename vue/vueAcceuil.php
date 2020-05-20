<!--code d'affichage-->
<!-- ici j'ai enlevé tout ce qui est global ( commun entre toutes les pages possibles) et qui est mis ds gabarit.php-->

<?php $this->titre = "Gestion des eleves"; ?><!-- cette ligne utilise la fonction PHP ob_start. Son rôle est de déclencher la mise en tampon du flux HTML de sortie : au lieu d'être envoyé au navigateur, ce flux est stocké en mémoire --> 
<link rel="stylesheet"  href="contenu/style.css" />
<a href="index.php?action=absence"> saisir les absences </a>
<h1>Liste des élèves</h1>

<table>

<tr>

<td>CNE</td>

<td>Nom</td>

<td>Prénom</td>

<td>Etat</td>

</tr>

<?php

foreach ($eleves as $eleve) {

$et="";

$lien="";

if($eleve["etat"]=="true")

{

$et="active";

$lien="activer.php?cne=".$eleve["cne"]."&etat=false";

}

else

{

$et="desactive";

$lien="activer.php?cne=".$eleve["cne"]."&etat=true";

}

?>

<tr>

<td><?php echo $eleve["cne"]; ?></td>

<td><?php echo $eleve["nom"]; ?></td>

<td><?php echo $eleve["prenom"]; ?></td>

<td><a href="<?php echo $lien; ?>"><?php echo $et; ?></a></td>

</tr>

<?php

// </table> le problème étais ici 
}

?>
</table> <!-- le probleme est résolu -->




