$(function () {

    $('div.character-container').click(function () {
        _callCharacterAction($(this).data('name'), $(this).data('constellations'))
        $('div#box-character').removeClass().addClass('box-character border-' + $(this).data('rank'))
    })

    let _callCharacterAction = function(name, constellations) {
        $.ajax({
            method: 'POST',
            url: '/boxes/character',
            data: {
                characterName: name,
                constellations: constellations,
            },
            dataType: "html",
            success: function (response) {
                $('div#box-character').html(response)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        })
    }
})