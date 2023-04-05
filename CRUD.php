<?php
require_once "config.php";
class CRUD 
{
    protected $connexion;
    protected $table;
    function __construct()
    {
        $pdo = new config();
        $this->connexion = $pdo->getConnexion();
    }
    function find($ref)
    {
        $sql = "select * from ". $this->table." where ID = $ref";
        $res = $this->connexion->query($sql);
        return ($res->fetch(PDO::FETCH_NUM));
    }

   

    function delete($ref)
    {
        $sql = "delete from " . $this->table . " where ID = $ref";
        $res = $this->connexion->exec($sql);
        return $res;
    }
}