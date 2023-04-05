<?php
$titre = "Bienvenue Chez AmiGo";
$name = "AmiGo-login";
require_once "config.php";
ob_start();
?><br><br>
<div class="div1">
    <h2>Ca Coûte ? on partage !</h2>
    <br>
    <h3>vous êtes un :</h3>
    <button class="btn btn-primary batn"><a class="nav-link " href="ajouterclient.php">Client</a></button>
    <button class="btn btn-primary batn "><a class="nav-link " href="ajouterchauffeur.php">Chauffeur</a></button><br>
    <a  href="https://www.amigo.tn">Visiter notre site</a>
</div>
<?php
$container = ob_get_clean();
include "layout.php";
?>