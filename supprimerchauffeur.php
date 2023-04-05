<?php 
require_once "chauffeur.php";
require_once("CRUDchauffeur.php");
ob_start();
$crud = new crudChauffeur();
$crud->delete($_GET["ref"]);
header("location:voirchauffeur.php");