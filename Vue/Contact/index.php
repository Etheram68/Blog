<?php    
require 'recaptchalib.php';
$siteKey = '6LcWfj4UAAAAAIbBCZma2f11zU4sawCXLwi8Yao7'; // votre clé publique
$secret = '6LcWfj4UAAAAAEgMUSRlSX8HgYzwTgk6rHkMTrzp'; // votre clé privée
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


            
        <form id="login-form" method="post" action="Vue/Contact/post_contact.php">

            <label for="inputname">Nom</label>
            <div>
                <input type="text" name="name" class="largeur-totale bords-arrondis" id="inputname" value="<?php echo isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] :''; ?>">
            </div>

            <label for="inputmail">Adress e.mail</label>
            <div>
                <input type="text" name="email" class="largeur-totale bords-arrondis" id="inputmail" value="<?php echo isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] :''; ?>">
            </div>

            <label for="inputmessage">Message</label>
            <div>
                <textarea  name="message" class="largeur-totale bords-arrondis" rows="8" id="inputmessage" ><?php echo isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] :''; ?></textarea>
            </div>

            <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
            <div class="col-sm-6 col-lg-offset-4 form-group">
                <input type="submit" class="bords-arrondis" value="Envoyer">
            </div>
        </form>
    </div>
</div>
<script src="https://www.google.com/recaptcha/api.js"></script>
<?php
$reCaptcha = new ReCaptcha($secret);
if(isset($_POST["g-recaptcha-response"])) {
    $resp = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
    if ($resp != null && $resp->success) {echo "CAPTCHA OK";}
    else {echo "CAPTCHA incorrect";}
}
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>