$('#titleScreen').hide();
$('#puzzle').hide();
$('#link2').hide();
$('#link3').hide();
$('#link4').hide();


$(document).ready(function(){

    $('#titleScreen').delay("slow").fadeIn("slow");
    $('#titleScreen').delay(3000).fadeOut("slow");
    $('#puzzle').delay(5000).fadeIn("slow");

    $('#inputAnswer').on('keyup', function() {
        var answer = $('#inputAnswer').val();
        answer = answer.toLowerCase();

        if (answer === '51497131')
        {
            $('#puzzle').fadeOut("slow");
            window.location.replace("menu").delay("slow");
        }
    });
});