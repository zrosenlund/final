function checkAvailability() {
    jQuery.ajax({
        url: "../final/model/check_availability.php",
        data:{username : $("#createUsername").val()},
        type: "POST",
        success:function(data){
            $("#checkAvailabilty").html(data);
            console.log(data);
        },
        error:function (){}
    });
}