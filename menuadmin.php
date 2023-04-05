<?php 
    session_start();
    if(!(isset($_SESSION['login'])) || !(isset($_SESSION['passw']))){
        header("location:login.php?etat=2");
    } else if($_SESSION["login"] != "admin" || $_SESSION["passw"] != "adminamigo123"){
        header("location:login.php?etat=3");
    }
    $titre = "Bienvenue Chez AmiGo";
    $name = "affichage";
    require_once "config.php";
    ob_start();
   
?>
<br>
<?php
             echo "<h2 class='div1'>Hello " . $_SESSION["login"]."</h2>";
?>
<div class="diva divc">    
<button class="btn btn-primary batn"><a class="nav-link" href="voirchauffeur.php">Liste chauffeur</a></button>
<button class="btn btn-primary batn"><a class="nav-link" href="voirclient.php">Liste client</a></button>
<button class="btn btn-primary batn"><a class="nav-link" href="login.php">Déconnecter</a></button>
 <br>
</div>         
          <?php
$container = ob_get_clean();
include "layoutadmin.php";
?>