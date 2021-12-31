<h2><?= $this->sCharacterName ?></h2>
<div style="height: 257px; background-image: url(<?= '/img/characters/illustrations/' .
str_replace(' ', '_', $this->sCharacterName) . '.png'?>)"></div>
<br>
<div class="row justify-content-center">
    <ul style="list-style: none; padding: 0;">
        <?php for ($i = 1; $i < 7; $i++) { ?>
            <li style="display: inline; margin-bottom: 5px;">
                <img class="constellation <?= ($this->iConstellations >= $i) ? ' c-active' : '' ?>"
                     src="/img/constellations/<?= str_replace(' ', '_', $this->sCharacterName) . '/C' . $i . '.png' ?>" alt="">
            </li>
        <?php } ?>
    </ul>
</div>
<!-- Build
<div class="row justify-content-center">
    <ul style="list-style: none; padding: 0">
        <li style="display: inline; margin-bottom: 5px;">
            <img class="radial-gradient-5 weapon" src="/img/weapons/Brise-pierre_de_corne_rouge.png"
                 alt="Brise-pierre de corne rouge" width="80" height="80">
        </li>
        <li style="display: inline; margin-bottom: 5px;">
            <img class="artifact radial-gradient-5" src="/img/artifacts/flower/Coquille_des_rêves_opulents.png" alt="">
        </li>
        <li style="display: inline; margin-bottom: 5px;">
            <img class="artifact radial-gradient-5" src="/img/artifacts/heather/Coquille_des_rêves_opulents.png" alt="">
        </li>
        <li style="display: inline; margin-bottom: 5px;">
            <img class="artifact radial-gradient-5" src="/img/artifacts/hourglass/Coquille_des_rêves_opulents.png" alt="">
        </li>
        <li style="display: inline; margin-bottom: 5px;">
            <img class="artifact radial-gradient-5" src="/img/artifacts/goblet/Coquille_des_rêves_opulents.png" alt="">
        </li>
        <li style="display: inline; margin-bottom: 5px;">
            <img class="artifact radial-gradient-5" src="/img/artifacts/headgear/Coquille_des_rêves_opulents.png" alt="">
        </li>
    </ul>
</div>
-->