<?php
 class chauffeur{
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $ville;
    private $numli;
    private $mdp;
    

    //constructeur 
    function __construct($n,$p,$t,$v,$nu,$mdp)
    {   
    
        $this->nom=$n;
        $this->prenom=$p;
        $this->telephone=$t;
        $this->ville=$v;
        $this->numli=$nu;
        $this->mdp=$mdp;
    }
    //setter and getters :

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of numli
     */ 
    public function getNumli()
    {
        return $this->numli;
    }

    /**
     * Set the value of numli
     *
     * @return  self
     */ 
    public function setNumli($numli)
    {
        $this->numli = $numli;

        return $this;
    }

    

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
 }

?>