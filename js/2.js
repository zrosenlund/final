$('#titleScreen').hide();
$('#puzzle').hide();

$(document).ready(function(){
    $('#titleScreen').delay("slow").fadeIn("slow");

    $("#toolButton").on("click", function() {
        $('#titleScreen').delay("slow").fadeOut("slow");
        $('#puzzle').delay(2000).fadeIn("slow");
    })

    $('#inputAnswer').on('keyup', function() {
        var answer = $('#inputAnswer').val();
        answer = answer.toLowerCase();

        if (answer === 'enigma')
        {
            $('#puzzle').fadeOut("slow");
            window.location.replace("3.php").delay("slow");
        }
    })
});