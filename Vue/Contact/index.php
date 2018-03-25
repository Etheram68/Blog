<?php
require '_inc.php';
?>
<div class="row">
    <div class="login-box">
        <h2>Laissez-moi un message</h2>
        <hr>

            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?php echo implode('<br />', $_SESSION['errors']); ?>
                </div>
            <?php endif; ?>
            <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success">
                    Votre email à bien été envoyez
                </div>
            <?php endif; ?>


            
        <form method="post" action="Vue/Contact/post_contact.php">

            <?php $form = new Form(isset($_SESSION['inputs']) ? $_SESSION['inputs'] : []); ?>
        
            <!--Champs de text Nom -->
                <?= $form->text('name', 'Votre Nom'); ?>
            

            <!--Champs de text email -->
                <?= $form->email('email', 'Votre email') ?>
             
            <!--Champs de text Message -->
            <?= $form->textarea('message', 'Votre message'); ?>

           
            <div class="col-sm-6 col-lg-offset-4 form-group">
                <input type="submit" class="bords-arrondis" value="Envoyer">
            </div>
        
        </form>
    </div>
</div>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>