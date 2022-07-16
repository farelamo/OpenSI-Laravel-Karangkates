$(document).ready(function() {
    $('#zero-conf').DataTable();
} );

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.label-input-image').html('<img id="blah" src="' + e.target.result + '" height="100" width="auto">');
        };

        reader.readAsDataURL(input.files[0]);
    }
}
