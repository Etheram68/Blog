<?php

namespace Blog\Controleur;

use Blog\Framework\Controleur;
use Blog\Modele_Dao\UserDao;
use Blog\Modele_Dao\HistoireDao;


class ControleurHistoire extends Controleur
{
    private $utilisateur;
    private $histoire;

    public function __construct()
    {
        $this->utilisateur = new UserDao();
        $this->histoire = new HistoireDao();
    }

    public function index()
    {
        $auteur = $this->histoire->auteur();
        $this->genererVue(array('auteur' => $auteur));
    }

}