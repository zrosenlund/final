//hide elements
$('#titleScreen').hide();
$('#puzzle').hide();
$('#link2').hide();
$('#link3').hide();
$('#link4').hide();
$('#toolTip').hide();
$('#footerToolTip').hide();


$(document).ready(function(){

    //fade in the clue and hints
    $('#puzzle').delay(2000).fadeIn("slow");
    $('#toolTip').delay(2300).fadeIn("slow");
    $('#footerToolTip').delay(5500).fadeIn("slow");

//input answer and verify
    $('#inputAnswer').on('keyup', function() {
        var answer = $('#inputAnswer').val();
        answer = answer.toLowerCase();

        if (answer === '51497131')
        {
            $('#puzzle').fadeOut("slow");
            window.location.replace("2").delay("slow");
        }
    });
    // Instruction for tool level 1
    $('#link1').click(function () {
        $("#toolTip").fadeOut("slow");
    });

    //Instructions for input level 1
    $('#inputAnswer').click(function () {
        $("#footerToolTip").fadeOut("slow");
    });
});