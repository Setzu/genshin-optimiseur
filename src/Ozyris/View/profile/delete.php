<?php ?>
<title>Suppression du profil</title>
<meta name="description" content="Supprimer son profil Genshin Optimizer">
<br>
<div class="row justify-content-center delete">
    <div class="col-4 dark-box">
        <a href="/profile" class="btn btn-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
            </svg>
            &nbsp;Retour
        </a>
        <div class="alert alert-danger">
            <h2>Attention</h2>
            <p>La suppression du compte est définitive, il ne sera plus possible de récupérer vos données !</p>
        </div>
        <form name="deleteForm" action="/profile/delete" role="form" method="post">
            <input name="deleteToken" type="hidden" value="<?= $_SESSION['deleteToken'] ?>">
            <input id="delete" type="submit" class="form-control btn btn-danger" value="5" disabled>
        </form>
    </div>
</div>

<script>
    let _count = 6;
    let _timer = null;

    let _refreshText = function(count) {
        $('input#delete').val(count);
    }

    let _countDown = function(){
        if(_count > 1){
            $('input#delete').attr("disabled", true)
            _timer = setTimeout(_countDown, 1000)
            _count--
            _refreshText(_count)
        } else {
            $('input#delete').val("Confirmer la suppression du compte").attr("disabled", false)
        }
    };

    _countDown()
</script>