<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/06/16
 * Time: 10:32
 */
?>
<title>Changement de mot de passe</title>
<meta name="description" content="Changer son mot de passe">
<br>
<div class="row justify-content-center changepassword">
    <div class="col-6 dark-box">
        <a href="/profile" class="btn btn-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
            &nbsp;Retour
        </a>
        <form action="/password/change" method="post" role="form" class="form-style">
            <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label" style="text-align: right;">Ancien mot de passe</label>
                <div class="col-sm-4">
                    <input name="password" type="password" class="form-control" id="password"
                           placeholder="Mot_de_p@sse" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="change-password" class="col-sm-4 col-form-label" style="text-align: right;">Nouveau mot de passe</label>
                <div class="col-sm-4">
                    <input name="change-password" type="password" class="form-control" id="change-password"
                           placeholder="Mot_de_p@sse" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label for="confirm-password" class="col-sm-4 col-form-label" style="text-align: right;">Confirmation du mot de passe</label>
                <div class="col-sm-4">
                    <input name="confirm-password" type="password" class="form-control" id="confirm-password"
                           placeholder="Mot_de_p@sse" required="required">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-success">Valider</button>
                </div>
            </div>
        </form>
    </div>
</div>
