$(function () {

    const _select = 'select'
    const _elevation = 'elevation'
    const _level = 'level'

    // personnage
    let _selectCharacter = $('select#character-select')
    let _selectElevation = $('select#character-elevation')
    let _selectLevel = $('select#character-lv')
    let _characterSubStatValueInput = $('input#character-substat-value')
    // arme
    let _weaponSelect = $('select#weapon-select');
    let _weaponElevation = $('select#weapon-elevation')
    let _weaponLevel = $('select#weapon-lv')
    let _weaponSubStatValueInput = $('input#weapon-substat-value')
    // artéfacts
    let _flowerLevel = $('select#flower-lv')
    let _heatherLevel = $('select#heather-lv')

    _selectCharacter.change(function () {
        // Vérifie que le type d'arme du perso selectionné est différent de l'ancien
        if (_weaponSelect.data('type') !== 0 && _weaponSelect.data('type') !== $(this).find(':selected').data('weapon')) {
            _weaponSelect.empty().append('<option selected disabled>Arme</option>')
            _weaponElevation.empty().append('<option selected disabled>Rang d\'élévation</option>').prop('disabled', true)
            _weaponLevel.empty().append('<option selected disabled>Niveau</option>').prop('disabled', true)
            $('input#weapon-atq').val(0)
            $('input#weapon-substat-value').val(0)
            $('label#weapon-substat-name').text('Bonus')
            $('img#weapon-skin').remove()
        }

        _weaponSelect.prop('disabled', false)
        _callWeaponTypeAction($(this).find(':selected').data('weapon'))

        // Si un level a déjà été renseigné, réinitialise le level, l'élévation et les stats
        if (_selectLevel.val() > 0) {
            _selectElevation.val(0)
            _selectLevel.empty().prop('disabled', true).append('<option selected disabled>Niveau</option>')
            $('input.character-stat').val(0).prop('disabled', true)
        }

        // Met à jour les informations du personnage sélectionné
        _callCharacterInfosAction(_select)
        _calculTotalStats()
    });

    // Appel en ajax de la liste des armes par rapport au type
    let _callWeaponTypeAction = function (weaponType) {
        $.ajax({
            method: 'POST',
            url: '/optimizer/weaponType',
            data: {
                weaponType: weaponType,
            },
            dataType: "json",
            success: function (response) {
                for (const [weaponName, weaponDatas] of Object.entries(response)) {
                    _weaponSelect.append('<option>' + weaponName + '</option>')
                }
                _weaponSelect.data('type', weaponType)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    };

    _selectElevation.change(function () {
        _selectLevel.empty().prop('disabled', false).append('<option selected disabled>Niveau</option>')
        _callCharacterInfosAction(_elevation)
    });

    _selectLevel.change(function () {
        _callCharacterInfosAction(_level)
    });

    // Appel en ajax des informations du personnage par rapport à l'ID
    let _callCharacterInfosAction = function (from) {
        $.ajax({
            method: 'POST',
            url: '/optimizer/charactersInfos',
            data: {
                characterId: _selectCharacter.val(),
                elevation: $('select#character-elevation').val(),
                level: $('select#character-lv').val()
            },
            dataType: "json",
            success: function (response) {
                let _atq = 0, _def = 0, _pv = 0, _subStatValue = 0
                $('label#character-substat-name').text(response['subStatName'])

                switch (from) {
                    case _select :
                        $('span#character-avatar').empty().prepend('<img src="/img/characters/avatar/' + response['name'].
                        replace(' ', '_') + '.png" alt="' + response['name'] + '" height="55" width="55"/>')
                        $('span#element-avatar').empty().prepend('<img src="/img/elements/' + response['element']
                         + '.png" alt="Elément" height="40" width="40"/>')
                        break
                    case _elevation :
                        $(response['level']).each(function (index, element) {
                            _selectLevel.append('<option value="' + element + '">' + element + '</option>')
                        })
                        break
                    case _level :
                        _atq = response['ATQ'][_selectElevation.val()][_selectLevel.val()]
                        _def = response['DEF'][_selectElevation.val()][_selectLevel.val()]
                        _pv = response['PV'][_selectElevation.val()][_selectLevel.val()]
                        _characterSubStatValueInput.data('characterSubStatId', response['subStatId'])
                        _subStatValue = response[response['subStatId']][_selectElevation.val()][_selectLevel.val()]
                        _characterSubStatValueInput.val(_subStatValue)

                        $('input#character-atq').val(_atq)
                        $('input#character-def').val(_def)
                        $('input#character-pv').val(_pv)
                        _calculTotalStats()
                        break
                }

            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    }

    _weaponSelect.change(function() {
        $('span#weapon-avatar').empty().prepend('<img id="weapon-skin" src="/img/weapons/' + _weaponSelect.val()
                .replaceAll(' ', '_') + '.png" width="55px" height="55px" alt="" style="border-radius: 10px"/>')
        $('input#weapon-atq').val(0)
        $('input#weapon-substat-value').val(0)
        _weaponLevel.prop('disabled', true)
        _weaponLevel.append('<option selected disabled>Niveau</option>')
        _callWeaponInfosAction(_select)
    });

    _weaponElevation.change(function() {
        $('input#weapon-substat-value').val('')
        _callWeaponInfosAction(_elevation)
    });

    _weaponLevel.change(function() {
        _callWeaponInfosAction(_level)
    });

    // statistiques des armes
    let _callWeaponInfosAction = function (from) {
        $.ajax({
            method: 'POST',
            url: '/optimizer/weaponInfos',
            data: {
                weaponType: _selectCharacter.find(':selected').data('weapon'),
                weaponName: _weaponSelect.val(),
                weaponElevation: _weaponElevation.val(),
                from: from
            },
            dataType: "json",
            success: function (response) {
                console.log(response)
                switch (from) {
                    case _select:
                        _weaponElevation.empty();
                        _weaponElevation.append('<option selected disabled>Rang d\'élévation</option>')

                        $(response['elevation']).each(function (index, element) {
                            _weaponElevation.append('<option value="' + element + '">' + element + '</option>')
                        });

                        $('label#weapon-substat-name').text(response['subStatName'])
                        _weaponElevation.prop('disabled', false)
                        break
                    case _elevation:
                        _weaponLevel.empty()
                        _weaponLevel.append('<option selected disabled>Niveau</option>')

                        $(response['level']).each(function (index, element) {
                            _weaponLevel.append('<option value="' + element + '">' + element + '</option>')
                        });

                        _weaponLevel.prop('disabled', false)
                        break
                    case _level:
                        $('input#weapon-atq').val(response['ATQ'][_weaponElevation.val()][_weaponLevel.val()])

                        if ('subStatId' in response) {
                            let _substatValue = response['substatValue'][_weaponElevation.val()][_weaponLevel.val()]
                            _weaponSubStatValueInput.data('weaponSubStatId', response['subStatId'])
                            _weaponSubStatValueInput.val(_substatValue)
                        } else {
                            _weaponSubStatValueInput.empty()
                        }
                        break
                    default:
                        break
                }

                _calculTotalStats()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status);
                //alert(xhr.responseText);
                //alert(thrownError);
            }
        });
    };

    // Remet à 0 le total de toutes les stats, et les recalculent à partir de tous les input
    function _calculTotalStats() {
        // Par défaut, tous les personnages ont 100% en total-7, 5% en total-8 et 50% en total-9
        // @TODO ne pas calculer le total pour les persos ayant du TC ou des DGT CRIT en ajoutant les 50%
        $('input.total-stat').val(0)
        $('input#total-7').val(100)
        $('input#total-8').val(5)
        $('input#total-9').val(50)

        // Ajoute les statistiques du personnage et de l'arme au total
        $('input#total-3').val($('input#character-def').val())
        $('input#total-5').val($('input#character-pv').val())
        _addValueToTotalStat(_characterSubStatValueInput.data('characterSubStatId'), _characterSubStatValueInput.val())
        _addValueToTotalStat(_weaponSubStatValueInput.data('weaponSubStatId'), _weaponSubStatValueInput.val())
        $('input#total-1').val(+$('input#weapon-atq').val() + +$('input#character-atq').val())

        // Ajoute les statistiques principales de chaque artéfact au total
        _addValueToTotalStat($('input#flower-main-stat-id').val(), $('input#flower-main-stat-value').val())
        _addValueToTotalStat($('input#heather-main-stat-id').val(), $('input#heather-main-stat-value').val())
        _addValueToTotalStat($('select#hourglass-main-stat-id').val(), $('input#hourglass-main-stat-value').val())
        _addValueToTotalStat($('select#goblet-main-stat-id').val(), $('input#goblet-main-stat-value').val())
        _addValueToTotalStat($('select#headgear-main-stat-id').val(), $('input#headgear-main-stat-value').val())

        // Ajoute les valeurs des affixes de chaque artéfact au total
        let _collection = $('input.affixe-value')
        for (let i = 0; i < _collection.length; i++) {
            let _affixeValue = _collection[i].value
            let _artifact = _collection[i].getAttribute("data-artifact");
            let _affixeId = _collection[i].getAttribute("data-affixe-id");

            if (_affixeValue > 0) {
                _addValueToTotalStat($('select#' + _artifact + '-affixe-' + _affixeId).val(), _affixeValue)
            }
        }

    }

    $(_flowerLevel).change(function () {
        _callArtifactMainStatValue($(this).val(), 'flower', 5)
    })

    $(_heatherLevel).change(function () {
        _callArtifactMainStatValue($(this).val(), 'heather', 1)
    })

    $('select.artifact-level').change(function () {
        let _artifact = $(this).data('artifact')
        $('select#' + _artifact + '-main-stat-id').prop('disabled', false)
        $('select.' + _artifact + '-affixes').prop('disabled', false)
    })

    $('.select-main-stat').change(function () {
        _callArtifactMainStatValue($('select#' + $(this).data('artifact') + '-lv').val(), $(this).data('artifact'), $(this).val())
    })

    $('.select-affixe').change(function () {
        _callAffixeValues($(this).data('artifact'), $(this).data('affixe'), $(this).val(), $('select#' + $(this).data('artifact') + '-lv').val(), $(this).attr('id'))
        _removeAttribute($(this).data('artifact'), $(this).data('affixe'), $(this).val())
    })

    function _removeAttribute(artifact, affixe, attribut) {
        
    }

    /**
     * @param statId
     * @param statValue
     * @private
     */
    function _addValueToTotalStat(statId, statValue) {
        switch (parseInt(statId)) {
            case 2:
                $('input#total-1').val(+$('input#total-1').val() + Math.round((+$('input#character-atq').val() +
                    +$('input#weapon-atq').val()) * +statValue / 100))
                break
            case 4:
                $('input#total-3').val(+$('input#total-3').val() + Math.round(+$('input#character-def').val() *
                    +statValue / 100))
                break
            case 6:
                $('input#total-5').val(+$('input#total-5').val() + Math.round(+$('input#character-pv').val() *
                    +statValue / 100))
                break
            default:
                break
        }

        $('input#total-' + statId).val(+$('input#total-' + statId).val() + +statValue)
    }

    /**
     *
     * @param level
     * @param artifact
     * @param mainStatId
     * @private
     */
    function _callArtifactMainStatValue(level, artifact, mainStatId) {
        $.ajax({
            method: 'POST',
            url: '/optimizer/artifactMainStatValue',
            data: {
                'artifact': artifact,
                'mainStatId': mainStatId,
                'level': level
            },
            dataType: "json",
            success: function (response) {
                $('input#' + artifact + '-main-stat-value').val(response)
                _calculTotalStats()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    }

    /**
     *
     * @param artifact
     * @param affixeId
     * @param attributeId
     * @param level
     * @param selectId
     * @private
     */
    function _callAffixeValues(artifact, affixeId, attributeId, level, selectId) {
        $.ajax({
            method: 'POST',
            url: '/optimizer/affixeValues',
            data: {
                'attributeId': attributeId,
                'level': level
            },
            dataType: "json",
            success: function (response) {
                let _selectAttributeValue = $('input#' + artifact + '-affixe-value-' + affixeId)
                _selectAttributeValue.attr('min', response['min'])
                _selectAttributeValue.attr('max', response['max'])
                _selectAttributeValue.attr('step', response['step'])
                _selectAttributeValue.prop('disabled', false).val(response['min'])
                _calculTotalStats()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                //alert(xhr.status)
                //alert(xhr.responseText)
                //alert(thrownError)
            }
        });
    }

    $('input.affixe-value').change(function () {
        _calculTotalStats()
    })

});