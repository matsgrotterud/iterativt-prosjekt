$(document).ready(function () {
    validate();
    $('#navn, #tittel, #beskrivelse').keyup(validate);
    $('#type').change(validate);
});
function validate() {
    if ($('#navn').val().length > 0 &&
        $('#tittel').val().length > 0 &&
        $('#beskrivelse').val().length > 0 &&
        $('#type option:selected').val() != "") {
        $('#submit').prop('disabled', false);
        return true;
    }
    else {
        $('#submit').prop('disabled', true);
        return false;
    }
}
$("form").on("submit", function(event) {
    event.preventDefault();
    if(validate()) {
        $("form").hide();
        $(".message").show();
        $.post('http://home.nith.no/~nguhuo15/v2/content/assets/php/post_nyhet.php', $("form").serializeArray())
    }
});
