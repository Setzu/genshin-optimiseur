<?php ?>
<title>Armes</title>
<meta name="description" content="Liste de toutes les armes de Genshin Impact">
<div class="container-fluid box-container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div style="text-align: center; background-color: rgba(52, 58, 64, 1);">
                <button class="weapons-tab btn btn-dark selected-dark-btn" data-weapontype="1">
                    <img src="/img/weapons/Sword.png" alt="" width="50px" height="50px"/><br><strong class="weapon-filter">Épées à une main</strong>
                </button>
                <button class="weapons-tab btn btn-dark" data-weapontype="2">
                    <img src="/img/weapons/Claymore.png" alt="" width="50px" height="50px"/><br><strong class="weapon-filter">Épées à deux mains</strong>
                </button>
                <button class="weapons-tab btn btn-dark" data-weapontype="3">
                    <img src="/img/weapons/Bow.png" alt="" width="50px" height="50px"/><br><strong class="weapon-filter">Arcs</strong>
                </button>
                <button class="weapons-tab btn btn-dark" data-weapontype="4">
                    <img src="/img/weapons/Polearm.png" alt="" width="50px" height="50px"/><br><strong class="weapon-filter">Armes d'hast</strong>
                </button>
                <button class="weapons-tab btn btn-dark" data-weapontype="5">
                    <img src="/img/weapons/Catalyst.png" alt="" width="50px" height="50px"/><br><strong class="weapon-filter">Catalyseurs</strong>
                </button>
            </div>
            <div id="weaponsList" class="tabs"></div>
        </div>
    </div>
</div>

<script type="text/javascript" src="/js/ajax/weapons.js"></script>