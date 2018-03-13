<head>
    <link href="../styles/sideBar.css">
</head>
<!--OPEN SIDEBAR-->
<div id="mySidenav" class="sidenav">
    <a href="#" id="link1">A -> #</a>
    <input class="decode form-control" type="text" id="decode1">
    <button class="submit btn btn-dark" id="submit1">Go</button>
    <p id="result1"></p>

    <a href="#" id="link2"># -> A</a>
    <input class="decode form-control" type="text" id="decode2">
    <button class="submit btn btn-dark" id="submit2">Go</button>
    <p id="result2"></p>

    <a href="#" id="link3">01101101 -> #</a>
    <input class="decode form-control" type="text" id="decode3">
    <button class="submit btn btn-dark" id="submit3">Go</button>
    <p id="result3"></p>

    <a href="#" id="link4">Menu</a>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="../js/cryptoFunctions.js"></script>
<script>
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
        $("#result1").html(lettersToNumbers(input));
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
        $("#result2").html(numbersToLetters(input));
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
        $("#result3").html(ConvertBase.bin2dec(input));
    });

</script>