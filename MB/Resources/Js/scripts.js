/**
 * Created by Cox on 01.04.2016.
 */
$(document).ready(function () {
    $('#Submit').click(function (e) {
        e.preventDefault();
        if ($('input#volume').val().length > 0) {
            $('#volume').attr('disabled', true);
            $('#Fridge').fadeIn();
        }

    })

});

