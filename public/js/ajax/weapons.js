$(function () {

    // Appel de _callWeaponsDatasAction lors du click sur un onglet si le bouton n'a pas déjà été séléctionné
    $('button.weapons-tab').click(function () {
        if (! $(this).hasClass('selected-dark-btn')) {
            $('button.weapons-tab').removeClass('selected-dark-btn')
            $(this).addClass('selected-dark-btn')
            _callWeaponsDatasAction($(this).data('weapontype'))
        }
    })

    // Récupére toutes les infos des armes des fichiers de conf via WeaponsDatasAction du WeaponsController
    let _callWeaponsDatasAction = function(weaponType) {
        $.ajax({
            method: 'POST',
            url: '/weapons/weaponsDatas',
            data: {
                weaponType: weaponType,
            },
            dataType: "html",
            success: function (response) {
                $('div#weaponsList').html(response)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    }

    // On affiche les épées au chargement de la page
    _callWeaponsDatasAction(1);
})