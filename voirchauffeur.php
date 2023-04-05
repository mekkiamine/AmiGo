<?php
$titre = "La liste des chauffeurs";
$name = "affichage";
require_once "chauffeur.php";
require_once "CRUDchauffeur.php";
require_once "config.php";
ob_start();
$crudc = new crudChauffeur();
$leschauffeurs = $crudc->findAllchauffeur();
?>
<table class="table" id="example">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th>Num.License</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($leschauffeurs as $chauffeur) {
    echo "<tr>";
    foreach ($chauffeur as $variable) {
        echo "<td>$variable</td>";
    }
    echo "<td><a href=supprimerchauffeur.php?ref=".$chauffeur[0]." ><img src='supprimer.png' class='social'></a></td>";
    echo "</tr>";
}
echo "</tbody></table>";?>
<br class="text-right">
<button type="submit" class="btn btn-primary batn " name='res'><a class="nav-link" href="ajouterchauffeur.php?option=   ">Ajouter chauffeur</a></button>
<button type="submit" class="btn btn-primary batn " name='res'><a class="nav-link" href="menuadmin.php">Retour</a></button>
<?php
$container = ob_get_clean();
include "layoutadmin.php";