<?php
$titre = "Bienvenue Chez AmiGo";
$name = "affichage";
require_once "config.php";
ob_start();
?>
<div class="divc">
<h2>Choose your Ride Wisely</h2><br>    
<button class="btn btn-primary batn"><a class="nav-link" href="login.php">Se connecter</a></button>
<button class="btn btn-primary batn"><a class="nav-link" href="inscription.php">S'inscrire</a></button>
</div>

<?php
$container = ob_get_clean();
include "layout.php";
?>