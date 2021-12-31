<?php ?>
<div class="vh-container">
    <table id="weapons-table" class="table table-dark table-striped target-none" style="text-align: center;">
        <thead>
        <tr style="cursor: pointer; text-align: center">
            <th class="th-sort" data-column="0" style="width: 25%;">&nbsp;Arme</th>
            <th class="th-sort sort-asc" data-column="1" style="width: 10%">
                <img class="icon-up" src="/img/icons/caret-up-fill.svg" alt=""/> Rang
            </th>
            <th class="th-sort" data-column="2" style="width: 10%">&nbsp;Attaque</th>
            <th class="th-sort" data-column="3" style="width: 20%">&nbsp;Attribut</th>
            <th class="th-sort" data-column="4" style="width: 20%">&nbsp;Méthodes d'obtention</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->aWeaponsList as $name => $aWeaponDatas) { ?>
        <tr>
            <td style="text-align: left; vertical-align: middle">
                <?php // Permet de filtrer correctement par ordre alphabétique en remplaçant le É par E ?>
                <span hidden><?= str_replace('Œ', 'Oe', str_replace('É', 'E', $name)); ?></span>
                <img src="/img/weapons/<?= str_replace(' ', '_', $name) . '.png' ?>" alt="" height="60px"
                     width="60px" class="low-border-radius <?= 'radial-gradient-' . $aWeaponDatas['rank'] ?>">
                <strong><?= $name; ?></strong>
            </td>
            <td style="vertical-align: middle">
                <?php for ($i = 0; $i < $aWeaponDatas['rank']; $i++) { ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                <?php } ?>
            </td>
            <td style="vertical-align: middle"><?= $aWeaponDatas['baseAtq'] ?></td>
            <td style="vertical-align: middle">
                <?php if (array_key_exists('subStatId', $aWeaponDatas)) {
                    echo $this->aMetaDatas['attributs'][$aWeaponDatas['subStatId']] . ' (' .
                        $aWeaponDatas['baseSubStatValue'] . ($aWeaponDatas['subStatId'] != 10 ? ' %)' : ')');
                } else { ?>
                    Aucun
                <?php } ?>
            </td>
            <td style="vertical-align: middle">
                <?php if ($aWeaponDatas['obtention'] == 1 || $aWeaponDatas['rank'] > 3 || $name === 'Épée en fer noir') { ?>
                    <?= $this->aMetaDatas['obtentions'][$aWeaponDatas['obtention']]; ?>
                <?php } else { ?>
                    <?= $this->aMetaDatas['obtentions'][$aWeaponDatas['obtention']] . ', ' . $this->aMetaDatas['obtentions'][1]; ?>
                <?php } ?>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
<script type="text/javascript" src="/js/weapons-sort.js"></script>