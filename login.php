<?php 
    session_start();
    if(isset($_GET["etat"])){
        switch ($_GET["etat"]){
            case 1: 
                echo "<script>alert('login et/ou mot de passe sont incorrects !!');</script>";
                break;
            case 2: 
                echo "<script>alert('vous devez vous authentifier avant!!');</script>";
                break;
            case 3:
                echo '<script>alert("Vous n\'etes pas admin");</script>';
                break;
            case 4:
                echo '<script>alert("Deconnecté");</script>';
                break;
        }
    }
require_once "config.php";
$data=new config;
$conn=$data->getConnexion();
$name = "Ajouter";
$titre = "Bienvenue chez AmiGo ";
ob_start(); //start
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post" class="divc">
    <div class="form-group">
      <label for="nom" class="form-label mt-4">login</label>
      <input type="text" class="form-control" name="login" placeholder="">
    </div>
    <div class="form-group">
      <label for="passw" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" name="passw" placeholder="">
    </div>
        <?php
                if (isset($_GET['conn'])) {
                    if($_GET['conn']==1){
                    $error_message='vérifier vos coordonnées';
                    echo "<p class='text-danger'>$error_message</p>";}
                }
         ?>
        <input type="submit" class="btn btn-primary batn ba" value="Envoyer" name="ok">
        <a href="inscription.php">Vous n'avez pas un compte ? inscrivez vous. </a>
        
    </form>
   
    <?php 
        if(isset($_POST["ok"])){
            $login = htmlspecialchars($_POST["login"]);
            $passw = htmlspecialchars($_POST["passw"]);
            if($login == 'admin' && $passw == 'adminamigo123'){
                $_SESSION['login'] = $login;
                $_SESSION['passw'] = $passw;
                header("location:menuadmin.php");
            } else {
                $email = $_POST['login'];
                $password = $_POST['passw'];
                $stmt = $conn->prepare("SELECT * FROM chauffeur WHERE nom = :nom AND MDP= :passw");
                $stmt->bindValue(':nom', $email);
                $stmt->bindValue(':passw', $password);
                $stmt->execute();
                $stmt1 = $conn->prepare("SELECT * FROM client WHERE nom = :nom AND MDP= :passw");
                $stmt1->bindValue(':nom', $email);
                $stmt1->bindValue(':passw', $password);
                $stmt1->execute();
                $result = $stmt->fetchAll();
                $result1 = $stmt1->fetchAll();
                if (!empty($result1)) {
                    // login success
                    session_start();
                    $_SESSION['logged_in'] = true;
                    $_SESSION['login'] = $email;
                    header('Location: menucc.php?conn=2');
                    exit;
                }else if (!empty($result)) {
                    // login success
                    session_start();
                    $_SESSION['logged_in'] = true;
                    $_SESSION['login'] = $email;
                    header('Location: menucc.php?conn=2');
                    exit;
                } else {
                    // login failed
                    header('location:login.php?conn=1');
                }
        }
    }
    ?>
</body>
</html>
<?php
$container = ob_get_clean();
include "layout.php";
?>