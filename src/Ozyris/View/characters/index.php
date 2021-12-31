<?php ?>
<title>Personnages</title>
<meta name="description" content="Liste de tous les personnages de Genshin Impact">
<div class="row justify-content-center target-none box-container">
    <?php // Filtres ?>
    <div class="col-sm-2 characters-filters">
        <button id="reset-filters" class="btn btn-dark" type="button" style="margin-bottom: 10px">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" color="#dc3545">
                <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
            Supprimer les filtres
        </button>
        <ul style="list-style-type:none;" class="elements-filter">
            <?php foreach ($this->aElements as $id => $element) { ?>
                <li style="display: inline;">
                    <button type="button" data-id="<?= $id ?>" data-name="element" class="btn btn-filters dark">
                        <img src="<?= '/img/elements/' . $id . '.png'; ?>" alt="<?= $element ?>"
                             title="<?= $element ?>" class="elements-img">
                    </button>
                </li>
            <?php } ?>
        </ul>
        <ul style="list-style-type:none;" class="ranks-filter">
            <?php for ($i = 4; $i < 6; $i++) { ?>
                <li style="display: inline;">
                    <button type="button" data-id="<?= $i ?>" data-name="rank" class="btn btn-filters dark">
                        <?php for ($j = 0; $j < $i; $j++) { ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                            </svg>
                        <?php } ?>
                    </button>
                </li>
            <?php } ?>
        </ul>
        <ul style="list-style-type:none;" class="weapons-filter">
            <?php foreach ($this->aArmes as $k => $arme) { ?>
                <li>
                    <button type="button" data-id="<?= $k ?>" data-name="weapon" class="btn btn-block btn-filters dark btn-weapons"
                            style="text-align: right;">
                        <span class="weapon-name"><?= $arme; ?>&nbsp;</span>
                        <img src="/img/weapons/<?= $this->aWeapons[$k] . '.png' ?>" alt="" width="30px" height="30px">
                    </button>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php // Tableau des personnages ?>
    <div class="col-sm-8 characters-content">
        <div class="vh-container">
            <table id="characters-table" class="table table-dark" style="margin: 0;">
                <thead>
                <tr style="text-align: center">
                    <th class="th-sort sort-asc" data-column="0" style="width: 30%;">Personnage</th>
                    <th class="th-sort" data-column="1" style="width: 20%;">Elément</th>
                    <th class="th-sort" data-column="2" style="width: 20%;">Rang</th>
                    <th class="th-sort" data-column="3" style="width: 30%;">Arme</th>
                    <th hidden></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($this->aCharacters as $k => $characters) { ?>
                    <tr id="<?= $k ?>" class="target-none character element-visible rank-visible weapon-visible
                    <?= 'weapon-' . $characters['weaponType'], ' rank-' . $characters['rank'],
                        ' element-' . $characters['element']; ?>">
                        <td>
                            <img src="<?= '/img/characters/avatar/' . str_replace(' ', '_', $characters['name']) .
                            '.png'; ?>" alt="<?= $characters['name']; ?>" height="60px" width="60px">
                            <span style="font-size: large;">&nbsp;&nbsp;<?= $characters['name']; ?></span>
                        </td>
                        <td style="vertical-align: middle; text-align: center;">
                            <span style="display: none;"><?= $characters['element']; ?></span>
                            <img src="<?= '/img/elements/' . $characters['element'] . '.png'; ?>"
                                 alt="<?= $this->aElements[$characters['element']]; ?>"
                                 title="<?= $this->aElements[$characters['element']]; ?>"
                                 style="width: 50px; height: 50px;">
                        </td>
                        <td style="vertical-align: middle; text-align: center;">
                            <span hidden><?= $characters['rank']; ?></span>
                            <?php for ($i = 0; $i < $characters['rank']; $i++) { ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                     class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                </svg>
                            <?php } ?>
                        </td>
                        <td style="vertical-align: middle; text-align: center;">
                            <?= $this->aArmes[$characters['weaponType']]; ?>
                        </td>
                    </tr>
                    <?php // Détails des personnages ?>
                    <tr class="character-details" data-characterId="<?= $k ?>">
                        <td class="character-details" hidden><?= $characters['name']; ?></td>
                        <td class="character-details" hidden><?= $characters['element']; ?></td>
                        <td class="character-details" hidden><?= $characters['rank']; ?></td>
                        <td class="character-details" hidden><?= $this->aArmes[$characters['weaponType']]; ?></td>
                        <td colspan="7">
                            <div class="tabs" style='background: no-repeat center url(<?= '/img/characters/voeux/' . str_replace(' ', '_', $characters['name']) . '.png';?>'>
                                <ul style="list-style: none;">
                                    <li style="display:inline;">
                                        <a href="<?= '#tabs-1-' . $k ?>" class="btn btn-dark title-detail">Aptitudes</a>
                                    </li>
                                    <li style="display:inline;">
                                        <a href="<?= '#tabs-2-' . $k ?>" class="btn btn-dark title-detail">Constellations</a>
                                    </li>
                                    <li style="display:inline;">
                                        <a href="<?= '#tabs-3-' . $k ?>" class="btn btn-dark title-detail">Matériaux d'élévation</a>
                                    </li>
                                </ul>
                                <div id="<?= 'tabs-1-' . $k ?>">
                                    <div id="<?= 'skills-' . $k; ?>"></div>
                                </div>
                                <div id="<?= 'tabs-2-' . $k ?>">
                                    <div id="<?= 'constellations-' . $k; ?>"></div>
                                </div>
                                <div id="<?= 'tabs-3-' . $k ?>">
                                    <div id="<?= 'materials-' . $k; ?>"></div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <p style="text-align: left">Des informations sont manquantes sur certains personnages, elles seront ajoutées au fur et à mesure !</p>
</div>

<script type="text/javascript" src="/js/characters-filters.js"></script>
<script type="text/javascript" src="/js/ajax/character-details.js"></script>