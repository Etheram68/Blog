<?php

namespace Blog\Controleur;

use Blog\Framework\Controleur;
use Blog\Modele_Dao\User_Dao;
use Blog\Modele_Dao\History_Dao;


class ControleurHistoire extends Controleur
{
    private $utilisateur;
    private $histoire;

    public function __construct()
    {
        $this->utilisateur = new User_Dao();
        $this->histoire = new History_Dao();
    }

    public function index()
    {
        $auteur = $this->histoire->auteur();
        $this->genererVue(array('auteur' => $auteur));
    }

}