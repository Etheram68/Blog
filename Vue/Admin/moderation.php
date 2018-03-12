<?php $this->menuActif = "Moderation";
$this->grade = $this->nettoyer($grade) ?>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"></h1>
    <div class="row placeholders">
        <div id="contenu">

            <?php $this->titre = "Mon Blog - Administration" ?>
            <h2>Panneau de modération</h2>
            <br>
            <form action="admin/general" method="post">
                <h2 class="sub-header">Gestion des commentaires et signalements</h2>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Titre du billet</th>
                            <th>Commentaire</th>
                            <th>Signalement(s)</th>
                            <th>Action(s)</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php if ($commentaires == null) { ?>
                            <tr>
                                <th>-</th>
                                <th>Aucun commentaire à afficher</th>
                                <th>-</th>
                                <th>-</th>
                            </tr>
                        <?php } else { ?>

                            <?php foreach ($commentaires as $commentaire): ?>
                                <tr>
                                    <th>
                                        <a href="<?= "billet/index/" . $this->nettoyer($commentaire['id']) ?>"><?= $this->nettoyer($commentaire['titre']) ?></a>
                                    </th>
                                    <th>
                                        <?= $this->nettoyer($commentaire['contenu']) ?>
                                    </th>
                                    <th>
                                        <?= ($this->nettoyer($commentaire['signalement'])) ? "Oui" : "Non" ?>
                                    </th>
                                    <th>
                                        <a id="lienEditerCommentaire"
                                           href="admin/commentaireEditer/<?= $commentaire['idc'] ?>">
                                            <img src="Contenu/images/symbol/commentaire-edit.png" alt="modifier billet"
                                                 title="Editer le commentaire">
                                        </a>
                                        <a id="lienSupprimerCommentaire"
                                           href="#" data-billet-title="<?= $this->nettoyer($commentaire['titre']) ?>"
                                       data-modal-confirm-url="admin/commentaireSupprimer/<?= $commentaire['idc'] ?>">
                                            <img src="Contenu/images/symbol/commentaire-sup.png"
                                                 alt="supprimer commentaire" title="Suprimer le commentaire">
                                        </a>
                                        <?php if ($commentaire['signalement'] > 0) : ?>
                                            <a id="lienSupprimerSignalement"
                                               href="admin/supprimerSignalement/<?= $commentaire['idc'] ?>">
                                                <img src="Contenu/images/symbol/signalement-sup.png"
                                                     alt="supprimer signalement" title="Supprimer le/les signalements">
                                            </a>
                                        <?php endif; ?>
                                    </th>
                                </tr>
                            <?php endforeach; ?>

                        <?php } ?>
                </div> <!-- #contenu -->
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

<!--<script>
$(function(){
    $modal = $('#modal-dialog');
   $('a#lienSupprimerCommentaire').on('click',function(e){
       e.preventDefault();
       $modal.find('a#btnYes').attr('href',$(this).data('modalConfirmUrl'));
       $modal.find('.modal-body p').text("Etes vous sur de vouloir supprimer le commentaire ");
       $modal.modal("show");
   })
});
</script>-->
<script src="Contenu/js/alerte.js"></script>