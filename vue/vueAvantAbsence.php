<?php $this->titre = "Saisie des absences"; ?>
<link rel="stylesheet"  href="contenu/monstyle.css" />
<a href=index.php?action=liste> voir la liste des absences </a>

<center>
       <h1>Noter Absence</h1> 
    <form action="index.php?action=absence" method="post">
        <table>
            <tr>
                <th> CNE </th>
                <td> <input type="text" name="cne" placeholder="CNE" class="champ" > </td>
</tr>
            <tr>
                <th> DATE </th>
                <td> <input type="text" name="date" placeholder="yyyy/mm/dd" class="champ"> </td>
</tr>
<tr>
            <tr>
                <th> Horaire </th>
                <td> <input type="text" name="horaire" placeholder="HH:MM:SS" class="champ" > </td>
</tr>
            <tr>
                <th> Matière </th>
                <td> <input type="text" name="mati" class="champ" > </td>
</tr>
            <tr>
                <th> Etat </th>
                <td> <input type="text" name="etat" placeholder="justifié/non justifié" class="champ"> </td>
</tr>
</table>
        <button type="submit" name="send" class="bouton"> Ajouter </button>
</form>
</center>



