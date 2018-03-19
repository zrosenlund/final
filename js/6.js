


$(document).ready(function(){

//input answer and verify
    $('#inputAnswer').on('keyup', function() {
        var answer = $('#inputAnswer').val();
        answer = answer.toLowerCase();

        if (answer === '43459323')
        {
            $('#puzzle').fadeOut("slow");
            window.location.replace("haft").delay("slow");
        }
    });

});