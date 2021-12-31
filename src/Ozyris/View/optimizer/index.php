<title>Optimiseur</title>
<meta name="description" content="Optimiser les statistiques des personnages">
<div class="row box-container">
    <div class="col-3 col-total-stat">
        <!-- Tableau des statistiques totales -->
        <table class="table table-dark optimizer-table">
            <thead>
            <tr>
                <th style="height: 80px; text-align: center">
                    <span id="character-avatar">
                        <img src="" alt="Personnage" width="55" height="55">
                    </span>
                    &nbsp;
                    <span id="weapon-avatar">
                        <img src="" alt="Arme" width="55" height="55">
                    </span>
                    &nbsp;
                    <span id="element-avatar">
                        <img src="" alt="&Eacute;lément" width="40" height="40">
                    </span>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="width: 70%;">
                    <ul style="list-style: none;" class="list-group">
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/pv.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-5">PV max</label>
                            <input name="total-5" id="total-5" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/atq.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-1">ATQ</label>
                            <input name="total-1" id="total-1" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/def.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-3">DEF</label>
                            <input name="total-3" id="total-3" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/elemental_mastery.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-10">Maîtrise élémentaire</label>
                            <input name="total-10" id="total-10" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/crit.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-8">Taux CRIT</label>
                            <input name="total-8" id="total-8" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/crit.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-9">DGT CRIT</label>
                            <input name="total-9" id="total-9" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/soins.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-11">Bonus de soins</label>
                            <input name="total-11" id="total-11" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/energy_recharge.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-7">Recharge d'énergie</label>
                            <input name="total-7" id="total-7" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/icons/dgt_physiques.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-12">
                                Bonus de <span style="color: #ffd780">DGT Physiques</span>
                            </label>
                            <input name="total-12" id="total-12" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/1.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-13">Bonus de <span style="color: #fe925d">DGT Pyro</span></label>
                            <input name="total-13" id="total-13" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/4.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-14">Bonus de <span style="color: #a757cb">DGT Eléctro</span></label>
                            <input name="total-14" id="total-14" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/5.png" alt="" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-15">Bonus de <span style="color: #a0e9e5">DGT Cryo</span></label>
                            <input name="total-15" id="total-15" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/2.png" alt="Bonus de DGT Hydro" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-16">Bonus de <span style="color: #21e1eb">DGT Hydro</span></label>
                            <input name="total-16" id="total-16" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/3.png" alt="Bonus de DGT Anémo" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-17">Bonus de <span style="color: #72e2c3">DGT Anémo</span></label>
                            <input name="total-17" id="total-17" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li class="name-total-stat input-group">
                            <img src="/img/elements/6.png" alt="Bonus de DGT Géo" width="30px" height="30px">&nbsp;
                            <label class="label-total-stat" for="total-18">
                                Bonus de <span style="color: #e3b342">DGT Géo</span>
                            </label>
                            <input name="total-18" id="total-18" type="number"
                                   class="total-stat form-control form-control-sm" value="0" disabled>
                        </li>
                        <li>
                            Les statistiques ci-dessus ne prennent pas en compte le raffinement de l'arme, les bonus de
                            set des artéfacts ni les bonus liés aux aptitudes / constellations des personnages.
                        </li>
                    </ul>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="col-9 box-optimizer">
        <!-- Personnages -->
        <div class="row box-optimizer">
            <div class="col-sm">
                <label for="character-select">Personnage</label>
                <select name="character-select" id="character-select" class="form-control form-control-sm">
                    <option value="" selected disabled>Personnages</option>
                    <?php foreach ($this->aCharacters as $k => $character) { ?>
                        <option value="<?= $k ?>" data-weapon="<?= $character['weaponType']; ?>">
                            <?= $character['name']; ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm">
                <label for="character-elevation">&Eacute;lévation</label>
                <select name="character-elevation" id="character-elevation" class="form-control form-control-sm">
                    <option value="0" selected disabled>Rand d'élévation</option>
                    <?php for ($i = 0; $i < 7; $i++) { ?>
                        <option value="<?= $i; ?>" data-weapon="<?= $i; ?>"><?= $i ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-sm">
                <label for="character-lv">Niveau</label>
                <select class="form-control form-control-sm" id="character-lv" name="character-lv" disabled>
                    <option value="0" selected disabled>Niveau</option>
                </select>
            </div>
            <div class="col-sm">
                <label for="character-pv">PV</label>
                <input name="character-pv" id="character-pv" class="form-control form-control-sm character-stat"
                       type="number" value="0" disabled>
            </div>
            <div class="col-sm">
                <label for="character-def">DEF</label>
                <input name="character-def" id="character-def" class="form-control form-control-sm character-stat"
                       type="number" value="0" disabled>
            </div>
            <div class="col-sm">
                <label for="character-atq">ATQ</label>
                <input name="character-atq" id="character-atq" class="form-control form-control-sm character-stat"
                       type="number" value="0" disabled>
            </div>
            <div class="col-sm">
                <label id="character-substat-name" for="character-substat-value">Bonus</label>
                <input name="character-substat-value" id="character-substat-value" data-characterSubStatId="0"
                       class="form-control form-control-sm character-stat" type="number" value="0" disabled>
            </div>
        </div>
        <hr>
        <!-- Armes -->
        <div class="row box-optimizer">
            <div class="col-sm">
                <label for="weapon-select">Arme</label>
                <select name="weapon-select" id="weapon-select" class="form-control form-control-sm" data-type="0"
                        disabled>
                    <option value="" disabled selected>Arme</option>
                </select>
            </div>
            <div class="col-sm">
                <label for="weapon-elevation">&Eacute;lévation</label>
                <select name="weapon-elevation" id="weapon-elevation" class="form-control form-control-sm" disabled>
                    <option value="" selected disabled>Rang d'élévation</option>
                </select>
            </div>
            <div class="col-sm">
                <label for="weapon-lv">Niveau</label>
                <select name="weapon-lv" id="weapon-lv" class="form-control form-control-sm" disabled>
                    <option value="" selected disabled>Niveau</option>
                </select>
            </div>
            <div class="col-sm">
                <label for="weapon-atq">ATQ</label>
                <input name="weapon-atq" id="weapon-atq" class="form-control form-control-sm" type="number"
                       value="0" disabled>
            </div>
            <div class="col-sm">
                <label for="weapon-substat-value" id="weapon-substat-name">Bonus</label>
                <input name="weapon-substat-value" id="weapon-substat-value" class="form-control form-control-sm"
                       type="number" value="0" disabled>
            </div>
        </div>
        <hr>
        <!-- Artéfacts -->
        <div class="row justify-content-center">
            <?php foreach ($this->aArtifacts['artifacts'] as $artifact => $aMainStat) { ?>
                <div class="col-sm">
                    <ul style="list-style: none">
                        <li>
                            <img src="<?= '/img/artifacts/' . $artifact . '.png' ?>" alt="" width="40px" height="40px">
                            &nbsp;<strong><?= $aMainStat['fr'] ?></strong>
                        </li>
                        <!-- Sélection du niveau -->
                        <li>
                            <div style="margin-bottom: 5px;">
                                <label for="<?= $artifact . '-lv'; ?>"></label>
                                <select name="<?= $artifact . '-lv'; ?>" id="<?= $artifact . '-lv'; ?>"
                                        class="form-control form-control-sm artifact-level"
                                        data-artifact="<?= $artifact ?>">
                                    <option value="0" selected disabled>Niveau</option>
                                    <?php for ($i = 20; $i >= 0; $i = $i - 4) { ?>
                                        <option value="<?= $i; ?>"><?= $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </li>
                        <!-- Sélection de la statistique principale si il y en a plusieurs -->
                        <li>
                            <div class="input-group" style="margin-bottom: 5px">
                                <?php if (is_array($aMainStat['mainStat'])) { ?>
                                    <label for="<?= $artifact . '-main-stat-id' ?>"></label>
                                    <select name="<?= $artifact . '-main-stat-id' ?>"
                                            id="<?= $artifact . '-main-stat-id' ?>"
                                            class="form-control form-control-sm select-main-stat"
                                            data-artifact="<?= $artifact ?>" style="width: 70%;" disabled>
                                        <option value="0" selected disabled>Statistique principale</option>
                                        <?php foreach ($aMainStat['mainStat'] as $mainStat) { ?>
                                            <option value="<?= $mainStat; ?>">
                                                <?= str_replace('Pourcentage', '%', $this->aMetaDatas['attributs'][$mainStat]); ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                <?php } else { ?>
                                    <label for="<?= $artifact . '-main-stat-id' ?>"
                                           class="form-control form-control-sm">
                                        <?= $this->aMetaDatas['attributs'][$aMainStat['mainStat']]; ?>
                                    </label>
                                    <input id="<?= $artifact . '-main-stat-id' ?>" class="form-control form-control-sm"
                                           name="<?= $artifact . '-main-stat-id' ?>" type="number"
                                           value="<?= $aMainStat['mainStat'] ?>" disabled hidden>
                                <?php } ?>
                                <label for="<?= $artifact . '-main-stat-value' ?>" hidden></label>
                                <input id="<?= $artifact . '-main-stat-value' ?>" class="form-control form-control-sm"
                                       name="<?= $artifact . '-main-stat-value' ?>" type="number" value="0"
                                       style="width: 30%;" disabled>
                            </div>
                        </li>
                        <!-- Sélection des affixes -->
                        <?php for ($i = 0; $i < 4; $i++) { ?>
                            <li>
                                <div class="input-group" style="margin-bottom: 5px">
                                    <label for="<?= $artifact . '-affixe-' . $i ?>"></label>
                                    <select name="<?= $artifact . '-affixe-' . $i ?>"
                                            id="<?= $artifact . '-affixe-' . $i ?>"
                                            class="form-control form-control-sm select-affixe <?= $artifact . '-affixes' ?>"
                                            data-artifact="<?= $artifact ?>" data-affixe="<?= $i ?>" style="width: 70%"
                                            disabled>
                                        <option value="0" selected disabled>Affixe</option>
                                        <?php foreach ($this->aArtifacts['affixes'] as $attributesId) { ?>
                                            <option value="<?= $attributesId; ?>">
                                                <?= $this->aMetaDatas['attributs'][$attributesId]; ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <label for="<?= $artifact . '-affixe-value-' . $i ?>"></label>
                                    <input type="number" min="0" max="0" step="0"
                                           name="<?= $artifact . '-affixe-value-' . $i ?>"
                                           id="<?= $artifact . '-affixe-value-' . $i ?>"
                                           class="affixe-value form-control form-control-sm" value="0"
                                           data-artifact="<?= $artifact ?>" data-affixe-id="<?= $i ?>"
                                           style="width: 30%;"
                                           disabled>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/ajax/optimizer.js"></script>
<script>
    $('.collapse').collapse()
</script>