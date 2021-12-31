<?php ?>
<title>Modification de la box</title>
<meta name="description" content="Ajouter / supprimer des personnages, armes et artéfacts à votre box">
<br>
<div id="tabs" class="dark-box">
    <div class="row justify-content-center" style="margin-bottom: 10px">
        <div class="col-sm-3">
            <a href="/boxes" class="btn btn-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                </svg>
                &nbsp;Retour
            </a>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-3">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active nav-box" href="#characters-tab">Personnages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-box disabled" href="#weapons-tab">Armes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-box disabled" href="#artifacts-tab">Artéfacts</a>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div id="characters-tab">
            <form action="/boxes/update" role="form" method="post">
                <div class="row">
                    <table class="table table-striped table-dark table-sm">
                        <thead>
                        <tr>
                            <th>Personnage</th>
                            <th>Possédé</th>
                            <th>Constellations</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($this->aCharacters as $id => $character) { ?>
                        <tr>
                            <td style="vertical-align: middle">
                                <input type="hidden" name="<?= 'character-' . $id ?>"
                                       value="<?= $id ?>">
                                <?= $this->aCharactersList[$id]['name']; ?>
                            </td>
                            <td>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-switch">
                                        <?php if ($character['owned']) { ?>
                                        <input type="checkbox" name="<?= 'owned-' . $id ?>" class="custom-control-input"
                                               id="<?= 'owned-' . $id ?>" checked>
                                        <?php } else { ?>
                                            <input type="checkbox" name="<?= 'owned-' . $id ?>" class="custom-control-input"
                                                   id="<?= 'owned-' . $id ?>">
                                        <?php } ?>
                                        <label class="custom-control-label" for="<?= 'owned-' . $id ?>"></label>
                                    </div>
                                </div>
                            </td>
                            <td style="text-align: center">
                                <label for="<?= 'constellations-' . $id ?>"></label>
                                <select name="<?= 'constellations-' . $id ?>" id="<?= 'constellations-' . $id ?>">
                                    <?php for ($i = 0; $i <= 6; $i ++) { ?>
                                        <option value="<?= $i ?>" <?= (int) $character['constellations'] === $i ? 'selected' : '' ?>><?= $i ?></option>
                                    <?php } ?>
                                </select>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-success">Enregistrer les modifications</button>
                </div>
            </form>
        </div>
        <div id="weapons-tab">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div id="artifacts-tab">
            <table class="table">
                <thead>
                <tr>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>