<?php
require_once "client.php";
require_once "CRUD.php";
require_once "config.php";

class crudclient extends CRUD{
    protected $table="client";

    function add(client $obj){
        $n=$obj->getNom();
        $p=$obj->getPrenom();
        $t=$obj->getTelephone();
        $v=$obj->getVille();
        $mdp=$obj->getMdp();
       
        $sql = "insert into ". $this->table." (nom,prenom,telephone,ville,MDP) values('$n','$p','$t','$v','$mdp')";
        $res = $this->connexion->exec($sql);
        return ($res);
    }
    function findAllclient()
    {
        $sql = "select ID,nom,prenom,telephone,ville from ". $this->table;
        $res = $this->connexion->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }

    
}
?>