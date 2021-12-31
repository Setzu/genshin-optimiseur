<?php ?>
<title>Partage de Box</title>
<meta name="description" content="Visualiser la box des autres utilisateurs.">
<div class="dark-box box-container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <form action="/boxes/share" role="form" method="post">
                <div class="input-group mb-3">
                    <a href="/boxes" class="btn btn-dark">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        &nbsp;Retour
                    </a>
                    <input type="text" name="boxLink" id="boxLink" class="form-control" placeholder="Lien de la box" maxlength="24" aria-label="Lien de la box" aria-describedby="button-addon2" required>
                    <div class="input-group-append">
                        <button class="btn btn-outline-light" type="submit" id="button-addon2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                            </svg>
                            &nbsp;Voir
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if (isset($this->aUserCharacters)) { ?>
        <div class="row justify-content-center" style="margin-bottom: 20px;">
            <div class="col-sm-6">
                <div class="progress">
                    <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $this->fTotalBoxCompletion ?>%;"
                         aria-valuenow="<?= $this->fTotalBoxCompletion ?>" aria-valuemin="0" aria-valuemax="100">
                        <?= $this->fTotalBoxCompletion . ' % de la collection' ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-start" style="margin-bottom: 20px;">
            <div class="col-sm-2" style="text-align: center">
                <div class="card bg-secondary mb-3">
                    <!-- IMG à dynamiser -->
                    <img src="/img/characters/avatar/Diluc.png" alt="Diluc" height="106" width="106" style="margin: 10px auto 0 auto">
                    <div class="card-body">
                        <h5 class="card-title"><?= $this->username ?></h5>
                        <p class="card-text"><?= ($this->uid) ? 'UID : ' . $this->uid : null; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8" style="text-align: center">
                <?php if (isset($this->aUserCharacters)) { ?>
                    <?php foreach ($this->aUserCharacters as $k => $character) { ?>
                        <?php if ($character['owned']) { ?>
                            <div class="character-container" data-name="<?= $this->aCharactersList[$k]['name'] ?>"
                                 data-constellations="<?= $character['constellations'] ?>"
                                 data-rank="<?= $this->aCharactersList[$k]['rank'] ?>" data-element="<?= $this->aCharactersList[$k]['element'] ?>">
                                <p style="margin-bottom: 0; color: #FFF"><?= $this->aCharactersList[$k]['name'] ?></p>
                                <div style="margin-bottom: 3px">
                                    <?php for ($i = 0; $i < $this->aCharactersList[$k]['rank']; $i++) { ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                             class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                                        </svg>
                                    <?php } ?>
                                </div>
                                <div class="border-<?= $this->aCharactersList[$k]['rank'] ?> illustration" style="background: url('<?= '/img/characters/background/'
                                . str_replace(' ', '_', $this->aCharactersList[$k]['name']) . '.png'?>'); background-size: cover">
                                    <div class="character-thumbnail" style="background-image: url(<?= '/img/characters/avatar/' .
                                    str_replace(' ', '_', $this->aCharactersList[$k]['name']) . '.png'?>)"></div>
                                </div>
                                <ul style="list-style: none; padding: 0;">
                                    <?php for ($i = 1; $i < 7; $i++) { ?>
                                        <li style="display: inline; margin-bottom: 5px;">
                                            <img class="constellation <?= ($character['constellations'] >= $i) ? ' c-active' : '' ?>"
                                                 src="/img/constellations/<?= str_replace(' ', '_', $this->aCharactersList[$k]['name']) . '/C' . $i . '.png' ?>" alt="">
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>