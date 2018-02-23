$('#titleScreen').hide();
$('#puzzle').hide();

$(document).ready(function(){
    $('#titleScreen').delay("slow").fadeIn("slow");

    $("#toolButton").on("click", function() {
        $('#titleScreen').delay("slow").fadeOut("slow");
        $('#puzzle').delay(2000).fadeIn("slow");
    })

    $('#inputAnswer').on('keyup', function() {
        if ($('#inputAnswer').val() == 'enigma')
        {
            $('#puzzle').delay("slow").fadeOut("slow");
            window.location.replace("2.php");
        }
    })
});