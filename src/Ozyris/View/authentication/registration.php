<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 29/05/16
 * Time: 03:19
 */
?>
<title>Inscription</title>
<meta name="description" content="Inscrivez-vous sur Genshin Optimizer">
<br>
<div class="row justify-content-center registration">
    <div class="col-4 dark-box">
        <form action="/authentication/registration" method="post" role="form" id="registration-form">
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label" style="text-align: right;">Email&nbsp;<span style="color: red">*</span></label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="email" placeholder="exemple@email.com"
                           required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label" style="text-align: right;">Nom d'utilisateur&nbsp;<span style="color: red">*</span></label>
                <div class="col-sm-6">
                    <input type="text" name="username" class="form-control" id="username" placeholder="DilucLeBG"
                           required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="uid" class="col-sm-4 col-form-label" style="text-align: right;">UID</label>
                <div class="col-sm-6">
                    <input type="text" name="uid" class="form-control" id="uid" placeholder="123456789" maxlength="9">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label" style="text-align: right;">Mot de passe&nbsp;<span style="color: red">*</span></label>
                <div class="col-sm-6">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Mot_de_p@sse"
                           required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm-password" class="col-sm-4 col-form-label" style="text-align: right;">Confirmation du MdP&nbsp;<span style="color: red">*</span></label>
                <div class="col-sm-6">
                    <input name="confirm-password" type="password" class="form-control" id="confirm-password"
                           placeholder="Mot_de_p@sse" required="required">
                </div>
            </div>
            <div class="form-group row" style="margin-bottom: 0">
                <p class="col-sm-4"><span style="color: red">*</span>&nbsp;Obligatoire</p>
            </div>
            <div class="form-group row">
                <div class="col align-self-start">
                    <a href="/authentication">Déjà un compte ?</a>
                </div>
                <div class="col align-self-end" style="text-align: center">
                    <input name="registrationToken" type="hidden" id="registrationToken" value="<?= $this->registrationToken; ?>" />
                    <button type="submit" class="btn btn-success">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</div>