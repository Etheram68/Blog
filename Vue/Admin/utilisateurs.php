<?php $this->menuActif = "Utilisateurs";
$this->grade = $this->nettoyer($grade);
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"></h1>
    <div class="row placeholders">
        <div id="contenu">

            <?php $this->titre = "Mon Blog - Administration" ?>
            <h2>Panneau de gestion des utilisateurs</h2>
            <br>

            <form action="admin/general" method="post">


                <h2 class="sub-header">Liste des utilisateurs</h2>
                <div class="table-responsive">
                    <a id="lienIns" href="admin/inscription">
                        <img src="Contenu/images/symbol/user-new.png" alt="Ajouter un nouvel utilisateur"
                             title="Ajouter un nouvel utilisateur"> Ajouter un nouvel utilisateur</a>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Login</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de naissance</th>
                            <th>Email</th>
                            <th>Grade</th>
                            <th>Statut</th>
                            <th>Action(s)</th>
                            <th>Administration</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($utilisateurs as $utilisateur):
                            ?>
                            <tr>
                                <th><?= $this->nettoyer($utilisateur['login']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['nom']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['prenom']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['naissance']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['email']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['grade']) ?></th>
                                <th><?= $this->nettoyer($utilisateur['acces']) ?></th>
                                <th><a id="lienEditerUtilisateur"
                                       href="admin/utilisateurEditer/<?= $this->nettoyer($utilisateur['id']) ?>">
                                        <img src="Contenu/images/symbol/user-edit.png" alt="Editer utilisateur"
                                             title="Editer l'utilisateur">
                                    </a>
                                    <?php if ($this->nettoyer($utilisateur['grade']) == "Administrateur" || $this->nettoyer($utilisateur['grade']) == "Moderateur") {
                                    } else { ?>
                                        <a id="lienSupprimerUtilisateur"
                                           href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurSupprimer/<?= $this->nettoyer($utilisateur['id']) ?>">
                                            <img src="Contenu/images/symbol/user-supr.png" alt="Supprimer utilisateur"
                                                 title="Supprimer l'utilisateur">
                                        </a>
                                        <?php if ($this->nettoyer($utilisateur['acces'] == "Banni")) { ?>
                                        <a id="lienDebanirUtilisateur"
                                           href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurDeBannir/<?= $this->nettoyer($utilisateur['id']) ?>">
                                            <img src="Contenu/images/symbol/user-unban.png" alt="Débanir l'utilisateur"
                                                 title="Débanir l'utilisateur">
                                        </a>
                                            <?php } else { ?>
                                        <a id="lienBanirUtilisateur"
                                           href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurBannir/<?= $this->nettoyer($utilisateur['id']) ?>">
                                            <img src="Contenu/images/symbol/user-ban.png" alt="Banir l'utilisateur"
                                                 title="Banir l'utilisateur">
                                        </a>
                                            <?php } ?>
                                    <?php } ?>
                                </th>
                                <th><a id="lienBanirUtilisateurMode"
                                       href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurDemote/<?= $this->nettoyer($utilisateur['id']) ?>">
                                        <img src="Contenu/images/symbol/user-demote.png"
                                             alt="Enlever les droits de moderation/administration"
                                             title="Enlever les droits de moderation/administration">
                                    </a>
                                    <a id="lienPromoteModo"
                                       href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurModerateur/<?= $this->nettoyer($utilisateur['id']) ?>">
                                        <img src="Contenu/images/symbol/user-modo.png" alt="Promouvoir modérateur"
                                             title="Promouvoir modérateur">
                                    </a>
                                    <a id="lienBanirUtilisateurProm"
                                       href="#" data-billet-title="<?= $this->nettoyer($utilisateur['id']) ?>" data-modal-confirm-url="admin/utilisateurAdministrateur/<?= $this->nettoyer($utilisateur['id']) ?>">
                                        <img src="Contenu/images/symbol/user-admin.png" alt="Promouvoir administrateur"
                                             title="Promouvoir administrateur">
                                    </a>
                                </th>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>

                </div>
            </form>
            <!-- Modal de confirmation de suppression-->
            <div id="modal-dialog" class="modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a href="#" data-dismiss="modal" aria-hidden="true" class="close">×</a>
                            <h3>Demande de confirmation</h3>
                        </div>
                        <div class="modal-body">
                            <p>Etes-vous sur de vouloir supprimer le billet concerné ?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="" id="btnYes" class="btn btn-danger">Oui,
                                je
                                confirme</a>
                            <a href="#" data-dismiss="modal" aria-hidden="true" class="btn secondary">Non, j'annule</a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>

        </div>
    </div>
</div>
<script src="Contenu/js/alerte.js"></script>