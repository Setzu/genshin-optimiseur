<?php ?>
<h3>Personnage</h3>
<ul style="list-style: none; padding: 0;">
    <?php foreach ($this->aElevation as $rank => $materials) { ?>
    <li class="details" style="text-align: center">
        <?php foreach ($materials as $id => $quantity) { ?>
            <img src="/img/materials/<?= $id ?>.png" alt="" height="30px" width="30px">
            <?= '<strong>' . $quantity . '</strong>&nbsp;' . $this->aMaterials[$id]['name'] . '&nbsp;;'?>
        <?php } ?>
    </li>
    <?php } ?>
</ul>
<h3>Aptitudes</h3>
<ul style="list-style: none; padding: 0;">
    <?php foreach ($this->aSkillMaterials as $level => $materials) { ?>
        <li class="details" style="text-align: center">
            <?php foreach ($materials as $id => $quantity) { ?>
                <img src="/img/materials/<?= $id ?>.png" alt="" height="30px" width="30px">
                <?= '<strong>' . $quantity . '</strong>&nbsp;' . $this->aMaterials[$id]['name'] . '&nbsp;;'?>
            <?php } ?>
        </li>
    <?php } ?>
</ul>