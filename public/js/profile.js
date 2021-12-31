$(function () {
    $('button#btn-uid').click(function () {
        $('input#uid').prop('disabled', false)
    })

    $('input#uid, input#uidChecked, input#boxChecked').on('change keyup', function () {
        $('button#submit-profil').prop('disabled', false)

        if ($('input#uidChecked').is(':checked')) {
            $('span#uid-check').text('sera');
        } else {
            $('span#uid-check').text('ne sera pas');
        }

        if ($('input#boxChecked').is(':checked')) {
            $('span#box-check').text('pourra');
        } else {
            $('span#box-check').text('ne pourra pas');
        }
    })
})