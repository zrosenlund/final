$('#titleScreen').hide();
$('#message').hide();

$(document).ready(function(){

    $('#titleScreen').delay("slow").fadeIn("slow");
    $('#titleScreen').delay(3000).fadeOut("slow");
    $('#message').delay(5000).fadeIn("slow");
});