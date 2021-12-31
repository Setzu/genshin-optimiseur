<?php ?>
<!-- CSS -->
<link rel="stylesheet" href="/css/versus.css">

<form action="/versus" role="form" method="post" style="margin-bottom: 0">
    <input type="hidden" name="token" value="<?= $this->token;?>">
    <div class="row versus-box flex-center">
        <div class="col-5">
            <div class="characters-box" style="width: auto; height: 440px; background-image: url('/img/characters/voeux/<?= str_replace(' ', '_', $_SESSION['firstCharacter']) . '.png' ?>');
                    background-color: rgba(255,255,255,0.7);"></div>
            <div class="first-box description-box">
                <h3 class="character-name"><?= $_SESSION['firstCharacter'];?></h3>
                <p><strong><?= $this->firstDescription ?></strong></p>
            </div>
            <input type="hidden" name="firstCharacter" value="<?= $_SESSION['firstCharacter'];?>">
            <button type="submit" name="firstSubmit" class="btn btn-light btn-block btn-lg">
        </div>

        <div class="col-1 flex-center" style="align-items: center;">
            <h1 class="vs-title">VS</h1>
        </div>

        <div class="col-5">
            <div class="characters-box" style="background-image: url('/img/characters/voeux/<?= str_replace(' ', '_', $_SESSION['secondCharacter']) . '.png' ?>');
                    background-color: rgba(0, 0, 0, 0.7);"></div>
            <div class="second-box description-box">
                <h3 class="character-name"><?= $_SESSION['secondCharacter'];?></h3>
                <p><strong><?= $this->secondDescription ?></strong></p>
            </div>
            <input type="hidden" name="secondCharacter" value="<?= $_SESSION['secondCharacter'];?>">
            <button type="submit" name="secondSubmit" class="btn btn-dark btn-block btn-lg" value="<?= $_SESSION['secondCharacter'];?>">
        </div>
    </div>
</form>