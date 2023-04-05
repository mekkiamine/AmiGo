<?php
require_once "chauffeur.php";
require_once "CRUD.php";
require_once "config.php";

class crudChauffeur extends CRUD{
    protected $table="chauffeur";
        
    function add(chauffeur $obj){
        $n=$obj->getNom();
        $p=$obj->getPrenom();
        $t=$obj->getTelephone();
        $v=$obj->getVille();
        $nu=$obj->getNumli();
        $mdp=$obj->getMdp();
        $sql = "insert into ". $this->table." (nom,prenom,telephone,ville,numli,MDP) values('$n','$p','$t','$v','$nu','$mdp')";
        $res = $this->connexion->exec($sql);
        return ($res);
    }
    function findAllchauffeur()
    {
        $sql = "select ID,nom,prenom,telephone,ville,numli from ". $this->table;
        $res = $this->connexion->query($sql);
        return ($res->fetchAll(PDO::FETCH_NUM));
    }

    
}
?>