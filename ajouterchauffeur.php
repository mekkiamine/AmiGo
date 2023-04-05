<?php 
$name = "Inscription-chauffeur";
$titre = "Bienvenue chez AmiGo";
ob_start(); //start
require_once("chauffeur.php");
require_once("config.php");
require_once("CRUDchauffeur.php");
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="divc">
    <h2>Inscription d'un chauffeur</h2>
    <div class="form-group">
      <label for="nom" class="form-label mt-4">nom</label>
      <input type="text" class="form-control" name="n" placeholder="">
    </div>
    <div class="form-group">
      <label for="p" class="form-label mt-4">Prénom</label>
      <input type="text" class="form-control" name="p" placeholder="">
    </div>
    <div class="form-group">
      <label for="t" class="form-label mt-4">Téléphone</label>
      <input type="text" class="form-control" name="t" >
    </div>
    <div class="form-group">
      <label for="v" class="form-label mt-4">ville</label>
      <input type="text" class="form-control" name="v" >
    </div>
    <div class="form-group">
      <label for="nu" class="form-label mt-4">Numéro license</label>
      <input type="text" class="form-control" name="nu" >
    </div>
    <div class="form-group">
      <label for="mdp" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" name="mdp" >
    </div>
    <div class="form-group">
      <label for="mdp1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" name="mdp1" placeholder="">
    </div>
    <?php
    //annonce d'un erreur au niveau du mot de passe
                if (isset($_GET['mdp'])) {
                    if($_GET['mdp']==1){
                    $error_message='Mot De passe incorrecte';
                    echo "<p class='text-danger'>$error_message</p>";}
                }
         ?>
    <input type="submit" class="btn btn-primary batn ba" value="Ajouter" name="res">
</form>

<?php
if(isset($_POST["res"])){
    if($_POST["mdp"]==$_POST["mdp1"]){
    $n = htmlspecialchars($_POST["n"]);
    $p = htmlspecialchars($_POST["p"]);
    $t = htmlspecialchars($_POST["t"]);
    $v = htmlspecialchars($_POST["v"]);
    $nu = htmlspecialchars($_POST["nu"]);
    $mdp = htmlspecialchars($_POST["mdp"]);
    //creation d'une nouvelle instance chauffeur
    $app = new chauffeur($n, $p, $t, $v, $nu,$mdp);
    $crud = new crudChauffeur();
    //ajout dans la base de données
    $crud->add($app);
    header("location:menucc.php");
    }else{
        header("location:ajouterclient.php?mdp=1");
    }
}
$container = ob_get_clean();
include "layout.php";
?>