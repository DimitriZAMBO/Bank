<?php


class Compte
{
    protected $numero;
    protected $solde;

    public function __construct($numero=7, $solde=100)
    {
       $this->numero = $numero;
       $this->solde = $solde;


    }

    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * @param mixed $solde
     */
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    public function informations(){
        echo "Il y a un solde de ".$this->getSolde()." dans le compte n°".$this->getNumero()."<br/>";
        echo"Merci! <br/>";
    }
}
