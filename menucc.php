<?php
session_start();
if (isset($_GET['mdp'])){
    if($_GET['mdp']==1){
        unset($_GET['mdp']);
    }
}
$titre = "Bienvenue Chez AmiGo";
$name = "AmiGo";
require_once "config.php";
ob_start();
?>
<div class="divc">
<h2>Choose your Ride Wisely</h2><br>    
<h3>Télécharger Maintenant !</h3>
<p> notre application est disponible sur :</p>
<button class="btn btn-primary batn "><a class="nav-link " href="https://play.google.com/store/apps/details?id=com.amigo.user">Play Store</a></button>
<button class="btn btn-primary batn "><a class="nav-link " href="https://apps.apple.com/tn/amigo-tunisie/id644349651%20">App Store</a></button></div>
<?php
$container = ob_get_clean();
include "layoutcc.php";
?>