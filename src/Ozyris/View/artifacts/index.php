<?php ?>
<title>Artéfacts</title>
<meta name="description" content="Liste de tous les artéfacts de Genshin Impact">
<div class="container-fluid box-container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div style="text-align: center; background-color: rgba(52, 58, 64, 1);">
                <button class="artifacts-tab btn btn-dark" data-rank="1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                    </svg>
                </button>
                <button class="artifacts-tab btn btn-dark" data-rank="2">
                    <?php for ($i = 0; $i < 2; $i ++) { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    <?php } ?>
                </button>
                <button class="artifacts-tab btn btn-dark" data-rank="3">
                    <?php for ($i = 0; $i < 3; $i ++) { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    <?php } ?>
                </button>
                <button class="artifacts-tab btn btn-dark" data-rank="4">
                    <?php for ($i = 0; $i < 4; $i ++) { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    <?php } ?>
                </button>
                <button class="artifacts-tab btn btn-dark selected-dark-btn" data-rank="5">
                    <?php for ($i = 0; $i < 5; $i ++) { ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                             class="bi bi-star-fill" viewBox="0 0 16 16" style="color:#ffcc32;">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                        </svg>
                    <?php } ?>
                </button>
            </div>
            <div id="artifactsList" class="tabs"></div>
        </div>
    </div>
</div>
<script type="text/javascript" src="/js/ajax/artifacts.js"></script>