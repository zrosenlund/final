<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 2/22/2018
 * Time: 3:18 AM
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

include ("cryptoFunctions.php");
?>

<div id="mySidenav" class="sidenav">
    <!--    letters to numbers (1)-->
    <a href="#" id="link1" class="tools">A -> #</a>
    <input class="decode" id="decode1" type="text">
    <button class="submit" id="submit1"> <-- </button>
    <p id="result1"></p>

    <!--    numbers to letters (2) -->
    <a href="#" id="link2" class="tools"># -> A</a>
    <input class="decode" id="decode2" type="text">
    <button class="submit" id="submit2"> <-- </button>
    <p id="result2"></p>

    <!--    letter shift (3) -->
    <a href="#" id="link3" class="tools">A >> D</a>
    <input class="decode" id="decode3" type="text">
    <button class="submit" id="submit3"> <-- </button>
    <p id="result3"></p>

    <!--    binary to letters (4)-->
    <a href="#" id="link4" class="tools">01101101</a>
        <input class="decode" id="decode4" type="text">
    <button class="submit" id="submit4"> <-- </button>
    <p id="result4"></p>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script>
    //hide text inputs and submit boxes
    $(".decode").hide();
    $(".submit").hide();

    //show text input and submit boxes when <a> is clicked

    //TOOL 1
        //show text input and hide the rest
        $("#link1").click(function(){
            $("#decode1").toggle();
            $("#decode2").hide();
            $("#submit2").hide();
            $("#decode3").hide();
            $("#submit3").hide();
            $("#decode4").hide();
            $("#submit4").hide();
        });

        //show button
        $("#decode1").click(function(){
            $("#submit1").show();
        });

        //NOTE TO SELF- left off with calling PHP crypto function on
        // text input when submit button is hit
        $("#submit1").on("click", function() {
            var choice = $("#decode1").val();
            $("#result1").html(choice);
        })
    //TOOL 2
        //text input
        $("#link2").click(function(){
            $("#decode2").toggle();
            $("#decode1").hide();
            $("#submit1").hide();
            $("#decode3").hide();
            $("#submit3").hide();
            $("#decode4").hide();
            $("#submit4").hide();
        });

        //button
        $("#decode2").click(function(){
            $("#submit2").show();
        });

    //TOOL 3
        //text input
        $("#link3").click(function(){
            $("#decode3").toggle();
            $("#decode1").hide();
            $("#submit1").hide();
            $("#decode2").hide();
            $("#submit2").hide();
            $("#decode4").hide();
            $("#submit4").hide();
        });

        //button
        $("#decode3").click(function(){
            $("#submit3").show();
        });

    //TOOL 4
        //text input
        $("#link4").click(function(){
            $("#decode4").toggle();
            $("#decode1").hide();
            $("#submit1").hide();
            $("#decode2").hide();
            $("#submit2").hide();
            $("#decode3").hide();
            $("#submit3").hide();
        });

        //button
        $("#decode4").click(function(){
            $("#submit4").show();
        });

</script>