<?php ?>
<div class="vh-container">
    <table id="artifacts-table" class="table table-dark table-striped target-none" style="text-align: center;">
        <thead>
        <tr style="cursor: pointer; text-align: center">
            <th class="th-sort sort-asc" data-column="0" style="width: 15%;">
                <img class="icon-up" src="/img/icons/caret-up-fill.svg" alt=""/> Nom du set
            </th>
            <th class="th-sort" data-column="1" style="width: 20%">&nbsp;Bonus de set 1</th>
            <th class="th-sort" data-column="2" style="width: 50%">&nbsp;Bonus de set 2</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($this->aArtifactsList as $name => $bonus) { ?>
            <tr>
                <td style="vertical-align: middle">
                    <span hidden><?= str_replace('&Acirc;', 'A', str_replace('&Eacute;', 'E', $name)); ?></span>
                    <p><?= $name ?></p>
                    <span>
                        <?php if (array_key_exists('headgear only', $bonus) && $bonus['headgear only']) { ?>
                        <img src="<?= '/img/artifacts/headgear/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <?php } else { ?>
                        <img src="<?= '/img/artifacts/flower/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <img src="<?= '/img/artifacts/heather/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <img src="<?= '/img/artifacts/hourglass/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <img src="<?= '/img/artifacts/goblet/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <img src="<?= '/img/artifacts/headgear/' . str_replace(' ', '_', $name) . '.png' ;?>" width="40" height="40" alt="">
                        <?php } ?>
                    </span>
                </td>
                <td style="vertical-align: middle"><?= isset($bonus[1]) ? $bonus[1] : ''; ?></td>
                <td style="vertical-align: middle"><?= isset($bonus[2]) ? $bonus[2] : ''; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<script type="text/javascript" src="/js/artifacts-sort.js"></script>