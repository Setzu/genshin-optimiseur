<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 21/12/21
 * Time: 21:05
 */
?>
<title>Profil</title>
<meta name="description" content="Profil Genshin Optimizer">
<br>
<div class="row justify-content-center profil">
    <div class="col-8 dark-box">
        <div class="row" style="padding-left: 50px;">
            <div class="col-4">
                <h2><a href="#"><img src="/img/characters/avatar/Diluc.png" alt="" width="60" height="60"></a>&nbsp;
                    <?= $_SESSION['user']->getUsername() ?>
                </h2>
            </div>
        </div>
        <form action="/profile" method="post" role="form" id="registration-form">
            <div class="form-group row">
                <label for="email" class="col-sm-4 col-form-label" style="text-align: right;">Email</label>
                <div class="col-sm-6">
                    <input type="email" name="email" class="form-control" id="email" required="required"
                           value="<?= $_SESSION['user']->getEmail() ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label" style="text-align: right;">Nom d'utilisateur</label>
                <div class="col-sm-6">
                    <input type="text" name="username" class="form-control" id="username" required="required"
                           value="<?= $_SESSION['user']->getUsername() ?>" disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="uid" class="col-sm-4 col-form-label" style="text-align: right;">UID</label>
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <input name="uid" type="number" class="form-control" id="uid" value="<?= $this->aProfileDatas['uid'] ?>" disabled>
                        <div class="input-group-append">
                            <button type="button" class="btn btn-secondary" role="button" id="btn-uid">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                </svg>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group row">
                <label for="uidChecked" class="col-sm-4 col-form-label" style="text-align: right;">Partage UID</label>
                <div class="col-sm-6">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="uidChecked" id="uidChecked" class="custom-control-input"
                            <?= (!$this->aProfileDatas['sharing_uid_permission']) ?: 'checked'?>>
                        <label class="custom-control-label" for="uidChecked">L'UID <span id="uid-check">
                                <?= ($this->aProfileDatas['sharing_uid_permission']) ? 'sera' : 'ne sera pas'?></span>
                            visible lors du partage de votre box</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="boxChecked" class="col-sm-4 col-form-label" style="text-align: right;">Partage Box</label>
                <div class="col-sm-6">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" name="boxChecked" id="boxChecked" class="custom-control-input"
                            <?= (!$this->aProfileDatas['sharing_box_permission']) ?: 'checked'?>>
                        <label class="custom-control-label" for="boxChecked">Votre box <span id="box-check">
                                <?= ($this->aProfileDatas['sharing_box_permission']) ? 'pourra' : 'ne pourra pas'?>
                            </span> être vue par les utilisateurs</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="box-url" class="col-sm-4 col-form-label" style="text-align: right;">Lien de votre box</label>
                <div class="col-sm-6">
                    <input name="box-url" type="text" class="form-control" id="box-url" value="<?= $this->sBoxUrl . $this->sHash ?>"
                           disabled>
                </div>
            </div>
            <div class="form-group row">
                <label for="box-url-shortcut" class="col-sm-4 col-form-label" style="text-align: right;">Lien court</label>
                <div class="col-sm-6">
                    <input name="box-url-shortcut" type="text" class="form-control" id="box-url-shortcut" value="<?= $this->sHash ?>"
                           disabled>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-8">
                    <a class="change-pwd" href="/password/change">Changer le mot de passe</a>
                    <br>
                    <a class="delete-user" href="/profile/delete" style="color:#ef4646">Suppression du compte</a>
                </div>
                <div class="col-sm-2" style="text-align: right;">
                    <form action="/profile/delete">
                        <input name="profileToken" type="hidden" id="profileToken" value="<?= $_SESSION['profileToken']; ?>" />
                        <button type="submit" class="btn btn-success" id="submit-profil" disabled>Enregistrer</button>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript" src="/js/profile.js"></script>