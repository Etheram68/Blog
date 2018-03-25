<?php
namespace Blog\Controleur;

use Blog\Framework\Controleur;
use Blog\Modele_Dao\BilletDao;
use Blog\Modele_Dao\CommentaryDao;

/**
 * Contrôleur des actions liées aux billets
 *
 * @author 
 */
class ControleurCommentaire extends Controleur {


    private $commentaire;

    /**
     * Constructeur 
     */
    public function __construct() {
        $this->commentaire = new CommentaryDao();
    }

    // Affiche les détails sur un billet
    public function index() {
    }

    // Signalement
    public function signaler() {
        $idCommentaire = $this->requete->getParametre("id");
        $com = $this->commentaire->getCommentaire($idCommentaire);
        $this->commentaire->ajouterUnSignalement($idCommentaire);
        $this->rediriger("billet","index/" . $com['bil_id']);

    }
}

