<?php
    require_once 'Client.php';
    require_once 'CompteCourant.php';
    require_once 'CompteEpargne.php';

   // $c1 = new Client("DUPONT", "Jean", "Franconville",26);

   // echo 'Je me nomme '.$c1->getNom()." j'ai ".$c1->getAge();
    //$c1->presentation();
    $compte1 = new CompteCourant('inactif');
    $compte = new Compte();
    print_r($compte1); die("step");
    $compte1->setSolde(250);
    $compte1->setNumero("12345");
    $compte1->situation();


    $compte2 = new CompteEpargne("28/07/2021");
    $compte2->setDateDernierAjout("15/08/2021");
    $compte2->infoEpargne();