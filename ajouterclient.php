<?php 
$name = "Inscription-client";
$titre = "Ajout d'un client: ";
ob_start(); //start
require_once("client.php");
require_once("config.php");
require_once("CRUDclient.php");
?>
<form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="divc">
<h2>Inscription d'un client</h2>
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
        $mdp = htmlspecialchars($_POST["mdp"]);
    
        //création d'une nouvelle instance client
        $app = new client($n, $p, $t, $v,$mdp);
        $crud = new crudclient();
        //affectation de l'instance dans la base de données
        $crud->add($app);
        header("location:menucc.php");
    }else{
        //redirection en cas d'erreur 
        header("location:ajouterclient.php?mdp=1");
    }
}
$container = ob_get_clean();
include "layout.php";
?>