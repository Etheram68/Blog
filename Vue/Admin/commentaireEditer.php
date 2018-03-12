<?php $this->menuActif = "Moderation";
$this->grade = $this->nettoyer($grade);
?>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1 class="page-header"></h1>
    <div class="row placeholders">
        <div id="contenu">

            <h2>Modifier un commentaire existant</h2>


            <div class="col-sm-12 contact-form">
                <form id="contact" method="post" class="form" role="form">
                    <textarea class="form-control" id="tiny" name="contenuCommentaire" placeholder="Le texte" rows="5"><?= $commentaire['contenu'] ?>
                    </textarea>
                    <br/>
                    <div class="row">
                        <div class="col-xs-12 col-md-12 form-group">
                            <button class="btn btn-primary pull-right" type="submit" Onclick="return ConfirmDelete();">Modifier le commentaire</button>
                </form>

 <script>
    function ConfirmDelete()
    {           
      var x = confirm("Êtes vous sur de vouloir modifier le commentaire ?");
      if (x)
          return true;
      else
        return false;
    }
</script>    
                <?php if (isset($msgErreur)): ?>
                    <p><?= $msgErreur ?></p>
                <?php endif; ?>

                <hr>

            </div>
        </div>
    </div>

