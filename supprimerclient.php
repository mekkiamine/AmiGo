<?php 
require_once "client.php";
require_once("CRUDclient.php");
ob_start();
$crud = new crudclient();
$crud->delete($_GET["ref"]);
header("location:voirclient.php");