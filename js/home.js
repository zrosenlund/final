$('#titleScreen').hide();
$('#circleArea').hide();
$('#firstCircle').hide();
$('#secondCircle').hide();
$('#thirdCircle').hide();
$("#formArea").hide();
$("#loginArea").hide();

$(document).ready(function(){
    $('#titleScreen').delay("slow").fadeIn("slow");

    $('#join').on('click', function() {
        $('#titleScreen').fadeOut("slow");
        $('#circleArea').delay("slow").fadeIn("slow");
        $('#firstCircle').delay("slow").fadeIn("slow");
    });

    $('#continue').on('click', function() {
        $('#titleScreen').fadeOut("slow");
        $('#loginArea').delay("slow").fadeIn("slow");
    });

    $('#firstCircle').on('click', function() {
        $('img').addClass('circle');
        $('#secondCircle').slideDown("slow");
        $('#thirdCircle').slideDown("slow");
    });

    $('.circle').on('click', function() {
        $(this).prop('src', '../final/images/circle-filled.png');

        if ($('#firstCircle').attr('src') == '../final/images/circle-filled.png' && $('#secondCircle').attr('src') == '../final/images/circle-filled.png' && $('#thirdCircle').attr('src') == '../final/images/circle-filled.png')
        {
            $('.circle').fadeOut("slow");
            $('#circleArea').fadeOut("slow");

            $('#formArea').delay("slow").fadeIn("slow");
        }
    });

    $('#back').on('click', function() {
        $('#formArea').fadeOut("slow");
        $('.circle').prop('src', '../final/images/circle-outline.png');
        $('#titleScreen').delay("slow").fadeIn("slow");
    })

    $('#back2').on('click', function() {
        $('#loginArea').fadeOut("slow");
        $('.circle').prop('src', '../final/images/circle-outline.png');
        $('#titleScreen').delay("slow").fadeIn("slow");
    })
});