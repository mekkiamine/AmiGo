<?php 
    session_start();
    session_unset();
    header("location:login.php?etat=4");
?>