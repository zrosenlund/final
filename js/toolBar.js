$(".decode").hide();
$(".submit").hide();

$("#link1").click(function(){
    $("#decode1").toggle();
    $("#submit1").toggle();
    $("#decode2").hide();
    $("#submit2").hide();
    $("#decode3").hide();
    $("#submit3").hide();
    $("#result1").html("");
});

// text input when submit button is hit
$("#submit1").on("click", function() {
    var input = $("#decode1").val();
    var regex = new RegExp('^0( 0 ?)*$');
    if (regex.test(lettersToNumbers(input))) {

    }
    else {
        $("#result1").html(lettersToNumbers(input));
    }
});
//TOOL 2
//text input
$("#link2").click(function(){
    $("#decode2").toggle();
    $("#decode1").hide();
    $("#submit1").hide();
    $("#submit2").toggle();
    $("#decode3").hide();
    $("#submit3").hide();
    $("#result2").html("");
});

// text input when submit button is hit
$("#submit2").on("click", function() {
    var input = $("#decode2").val();
    var regex = new RegExp('^0( 0 ?)*$');
    if (regex.test(numbersToLetters(input))) {

    }
    else {
        $("#result2").html(numbersToLetters(input));
    }
});
//TOOL 3
//text input
$("#link3").click(function(){
    $("#decode3").toggle();
    $("#decode1").hide();
    $("#submit1").hide();
    $("#submit3").toggle();
    $("#decode2").hide();
    $("#submit2").hide();
    $("#result3").html("");
});

$("#submit3").on("click", function() {
    var input = $("#decode3").val();
    $("#result3").html(numbersToLetters(ConvertBase.bin2dec(input)));
});