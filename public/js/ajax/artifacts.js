$(function () {

    // Appel de _callWeaponsDatasAction lors du click sur un onglet si le bouton n'a pas déjà été séléctionné
    $('button.artifacts-tab').click(function () {
        if (! $(this).hasClass('selected-dark-btn')) {
            $('button.artifacts-tab').removeClass('selected-dark-btn')
            $(this).addClass('selected-dark-btn')
            _callArtifactsDatasAction($(this).data('rank'))
        }
    })

    // Récupére toutes les infos des armes des fichiers de conf via WeaponsDatasAction du WeaponsController
    let _callArtifactsDatasAction = function(rank) {
        $.ajax({
            method: 'POST',
            url: '/artifacts/artifactsDatas',
            data: {
                rank: rank,
            },
            dataType: "html",
            success: function (response) {
                $('div#artifactsList').html(response)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    }

    // On affiche les épées au chargement de la page
    _callArtifactsDatasAction(5);
})