function checkPassword() {
    jQuery.ajax({
        url: "../final/model/check_password.php",
        data:{password : $("#inputPassword1").val()},
        type: "POST",
        success:function(data){
            $("#verifyPassword").html(data);
            console.log(data);
        },
        error:function (){}
    });
}