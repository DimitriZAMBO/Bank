<?php
require_once 'Compte.php';

class CompteEpargne extends Compte
{
    private $dateDernierAjout;

    public function __construct($d)
    {
        $this->dateDernierAjout = $d;

    }

    /**
     * @return mixed
     */
    public function getDateDernierAjout()
    {
        return $this->dateDernierAjout;
    }

    /**
     * @param mixed $dateDernierAjout
     */
    public function setDateDernierAjout($dateDernierAjout)
    {
        $this->dateDernierAjout = $dateDernierAjout;
    }



    public function infoEpargne(){
        $this->informations();
        echo "La date du dernier ajout est ".$this->getDateDernierAjout();
    }

}