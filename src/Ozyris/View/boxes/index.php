<?php ?>
<title>Box</title>
<meta name="description" content="Visualiser vos personnages, armes et artéfacts de votre box">
<div class="dark-box box-container">
    <div class="row justify-content-center">
        <div class="col-sm-6">
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link btn btn-dark nav-box" href="/boxes/update">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                        </svg>
                        &nbsp;Modifier ma box
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark active nav-box" href="/boxes">Mes personnages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark disabled nav-box" href="/boxes/#">Mes armes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark disabled nav-box" href="/boxes/#">Mes artéfacts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-dark nav-box" href="/boxes/share">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                        &nbsp;Voir une box
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <br>
    <?php if (!$this->fTotalBoxCompletion) { ?>
        <div class="row justify-content-center">
            <div class="col-sm-12" style="text-align: center">
                    <p>Vous n'avez pas encore ajouté de personnage. Vous pouvez le faire depuis le menu&nbsp;
                    <a href="/boxes/update">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                        </svg>
                        &nbsp;Modifier ma box
                    </a>
                </p>
            </div>
        </div>
    <?php } else { ?>
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
        <div class="row justify-content-center">
            <div class="col-sm-12" style="text-align: center">
                <?php foreach ($this->aCharacters as $k => $character) { ?>
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
</div>