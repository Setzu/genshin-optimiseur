$(function () {

    $('tr.character').click(function () {
        let _characterId = $(this).attr('id');
        let _nextElement = $(this).next();

        if (_nextElement.is(':visible')) {
            _nextElement.hide();
        } else {
            _callConstellationsAction(_characterId);
            _callSkillsAction(_characterId);
            _callMaterialsAction(_characterId)
            _nextElement.show();
        }

    });

    /**
     * @param id
     * @private
     */
    let _callConstellationsAction = function (id) {
        $.ajax({
            method: 'POST',
            url: '/characters/constellations',
            data: {
                characterId: id,
            },
            dataType: "html",
            success: function (response) {
                $('div#constellations-' + id).html(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                //alert(xhr.responseText);
                //alert(thrownError);
            }
        });
    }

    /**
     * @param id
     * @private
     */
    let _callSkillsAction = function (id) {
        $.ajax({
            method: 'POST',
            url: '/characters/skills',
            data: {
                characterId: id,
            },
            dataType: "html",
            success: function (response) {
                $('div#skills-' + id).html(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                //alert(xhr.responseText);
                //alert(thrownError);
            }
        });
    }

    /**
     * @param id
     * @private
     */
    let _callMaterialsAction = function (id) {
        $.ajax({
            method: 'POST',
            url: '/characters/materials',
            data: {
                characterId: id,
            },
            dataType: "html",
            success: function (response) {
                $('div#materials-' + id).html(response);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                //alert(xhr.responseText);
                //alert(thrownError);
            }
        });
    }
})
