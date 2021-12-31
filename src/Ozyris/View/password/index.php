<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 12/06/16
 * Time: 03:40
 */
?>
<title>Réinitialisation du mot de passe</title>
<meta name="description" content="Réinitialisez votre mot de passe">
<br>
<div class="row justify-content-center password">
    <div class="col-4 dark-box">
        <form action="" method="post" role="form">

            <div class="form-grou row">
                <div class="col align-self-start">
                    <a href="/authentication" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        &nbsp;Retour
                    </a>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label" style="text-align: right;">Email</label>
                <div class="col-sm-6">
                    <input id="email" type="text" name="email" class="form-control" placeholder="exemple@email.com"
                           required="required">
                </div>
            </div>

            <div class="form-group row">
                <div class="col align-self-center" style="text-align: center">
                    <button type="submit" class="btn btn-success">Réinitialiser le mot de passe</button>
                </div>
            </div>

        </form>
    </div>
</div>
