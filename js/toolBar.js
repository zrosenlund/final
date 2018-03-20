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

//make tool one run on enter
$("#decode1").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#submit1").click();
    }
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

//make second tool run when enter is pressed
$("#decode2").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#submit2").click();
    }
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

//make tool 3 run when enter button is hit
$("#decode3").keyup(function(event) {
    if (event.keyCode === 13) {
        $("#submit3").click();
    }
});

$("#submit3").on("click", function() {
    var input = $("#decode3").val();
    $("#result3").html(numbersToLetters(ConvertBase.bin2dec(input)));
});