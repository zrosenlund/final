require("check_availability.php");
require("../classes/dbFunctions.php");

function checkAvailability() {
    jQuery.ajax({
        url: "../final/model/check_availability.php",
        data:'username='+$("#createUsername").val(),
        type: "POST",
        success:function(data){
            $("#checkAvailiabilty").html(data);
        },
        error:function (){}
    });
}

$('#createUsername').on('blur', function() {
    checkAvailability();
});