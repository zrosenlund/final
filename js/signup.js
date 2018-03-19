$('#titleScreen').hide();
$('#message').hide();

$(document).ready(function(){

    $('#titleScreen').delay("slow").fadeIn("slow");
    $('#titleScreen').delay(3000).fadeOut("slow");
    $('#message').delay(5000).fadeIn("slow");

    $('#goToLevel1').on('click', function() {
        $('#message').fadeOut("slow");
        window.location.replace("levels/1");
    })
});