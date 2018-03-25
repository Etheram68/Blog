<?php

namespace Blog\Controleur;

use Blog\Framework\Controleur;
use Blog\Modele_Dao\BilletDao;
use Blog\Modele_Dao\CommentaryDao;
use Blog\Modele_Dao\UserDao;

/**
 * Contrôleur des actions liées aux billets
 *
 * @author Baptiste Pesquet
 */
class ControleurBillet extends Controleur
{

    private $billet;
    private $commentaire;
    private $utilisateur;

    /**
     * Constructeur
     */
    public function __construct()
    {
        $this->billet = new BilletDao();
        $this->commentaire = new CommentaryDao();
        $this->utilisateur = new UserDao();
    }

    // Affiche les détails sur un billet
    public function index()
    {
        $idBillet = $this->requete->getParametre("id");
        $billet = $this->billet->getBillet($idBillet);
        $billets = $this->billet->getBilletsTronquesVisible(1, 200);
        $commentaires = $this->commentaire->getCommentaires($idBillet);
        $nbCommentaires = $this->commentaire->countCommentaire($idBillet);

        if ($this->isAuthentificated()) {
            $login = $this->requete->getSession()->getAttribut("login");
            $acces = $this->requete->getSession()->getAttribut("acces");
            $this->genererVue(array('login' => $login,'acces' => $acces, 'billet' => $billet, 'billets' => $billets, 'commentaires' => $commentaires, 'nbCommentaires' => $nbCommentaires ));
        } else {
            $this->genererVue(array('billet' => $billet, 'billets' => $billets, 'commentaires' => $commentaires, 'nbCommentaires' => $nbCommentaires,));
        };
    }

    // Ajoute un commentaire sur un billet
    public function commenter()
    {
        $idBillet = $this->requete->getParametre("id");
        if($this->isAuthentificated()){
        $auteur = $this->requete->getSession()->getAttribut("login");
        $contenu = $this->requete->getParametre("contenu");
        $this->commentaire->ajouterCommentaire($auteur, $contenu, $idBillet);
    }
        // Exécution de l'action par défaut pour réafficher la liste des billets
        $this->executerAction("index");
    }
}

