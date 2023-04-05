<?php
$titre = "La liste des clients";
$name = "affichage";
require_once "client.php";
require_once "CRUDclient.php";
require_once "config.php";
ob_start();
$crudc = new crudclient();
$lesclients = $crudc->findAllclient();
?>
<table class="table" id="example">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOM</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Ville</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach ($lesclients as $client) {
    echo "<tr>";
    foreach ($client as $variable) {
        echo "<td>$variable</td>";
    }
    echo "<td><a href=supprimerclient.php?ref=".$client[0]." ><img src='supprimer.png' class='social'></a></td>";
    echo "</tr>";
}
echo "</tbody></table>";?>
<button type="submit" class="btn btn-primary batn " name='res'><a class="nav-link" href="ajouterclient.php">Ajouter client</a></button>

<button type="submit" class="btn btn-primary batn " name='res'><a class="nav-link" href="menuadmin.php">Retour</a></button>
<?php
$container = ob_get_clean();
include "layoutadmin.php";