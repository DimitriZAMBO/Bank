<?php
require_once 'Compte.php';

class CompteCourant extends Compte
{
    private $statut;

    public function __construct($statut)
    {
        $this->statut = $statut;
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * @param mixed $statut
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    }

    public function situation(){
        if ($this->getSolde() > 0 ){
            $this->setStatut("Débiteur");
            echo "Vous disposez d'un compte débiteur d'une valeur de ".$this->getSolde();
        }
        else{
            $this->setStatut("Créditeur");
            echo "Vous disposez d'un compte créditeur d'une valeur de ".$this->getSolde();
        }
    }
}