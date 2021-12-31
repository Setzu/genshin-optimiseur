<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 29/05/16
 * Time: 03:18
 */
?>
<title>Connexion</title>
<meta name="description" content="Connectez-vous sur Genshin Optimizer">
<br>
<div class="row justify-content-center connection">
    <div class="col-4 dark-box" style="text-align: center">
        <form action="" method="post" role="form" id="register-form" class="form-style">

            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label" style="text-align: right">Email / Nom d'utilisateur</label>
                <div class="col-sm-6">
                    <input type="text" id="username" name="username" required="required" placeholder="exemple@email.com"
                           class="form-control">
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label" style="text-align: right">Mot de passe</label>
                <div class="col-sm-6">
                    <input name="password" type="password" class="form-control" id="password" placeholder="Mot de passe"
                           required="required">
                </div>
            </div>

            <div class="form-group row">
                <div class="col align-self-start">
                    <a href="/authentication/registration">Pas encore inscrit ?</a>
                    <br>
                    <a href="/password">Mot de passe perdu ?</a>
                </div>
                <div class="col align-self-end" style="text-align: center;">
                    <input name="connectToken" type="hidden" id="connectToken" value="<?= $this->connectToken; ?>" />
                    <button type="submit" class="btn btn-success">Se connecter</button>
                </div>
            </div>
        </form>
    </div>
</div>
