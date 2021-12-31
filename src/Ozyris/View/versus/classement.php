<?php // CSS ?>
<link rel="stylesheet" href="/css/versus.css">

<br>
<div class="row" style="text-align: center;">
    <div class="col-3"></div>
    <?php for ($i = 0; $i < 3; $i++) { ?>
        <div class="col-2">
            <div class="vignette" style="background-image: url(<?= '/img/characters/' . str_replace(' ', '_', $this->aCharacters[$i]['nom'] . '.png'); ?>)"></div>
            <h3 style="color: #dddddd;"><?= $i + 1 . ' : ' . $this->aCharacters[$i]['nom']; ?></h3>
        </div>
    <?php } ?>
    <div class="col-3"></div>
</div>
<br>
<div class="row" style="text-align: center;">
    <div class="col-3"></div>
        <?php for ($i = 3; $i < 9; $i++) { ?>
            <div class="col-1">
                <div class="vignette" style="background-image: url(<?= '/img/characters/' . str_replace(' ', '_', $this->aCharacters[$i]['nom'] . '.png'); ?>)"></div>
                <h4 style="color: #dddddd;"><?= $i + 1 . ' : ' . $this->aCharacters[$i]['nom']; ?></h4>
            </div>
        <?php } ?>
    <div class="col-3"></div>
</div>