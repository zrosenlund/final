<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 1/19/2018
 * Time: 5:18 PM
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">
<head>
    <!--
    Zachary Rosenlund & Sarah Elkhart
    1/19/18
    home.html
    The view for the index page of my dating site
    -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../../styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dhurjati" rel="stylesheet">
    <link rel="stylesheet" href="../../styles/5.css">
    <link rel="stylesheet" href="../../styles/sideBar.css">
    <title>The Enigma Principle</title>
</head>
<body>

<div class="d-flex flex-row h-100" id="bodyContainer">

    <?php require('../toolBar.php');?>

<!--    <div class="w-100 d-flex justify-content-center align-items-center p-10" id="main">-->
<!--<!--        <h2 class="display-2">Congratulations, You Won!</h2>-->-->
<!--    </div>-->

    <div class="container mx-auto" id="puzzleContainer">
        <h1>Find the 5 differences</h1>
            <img src="../../images/findTheDifferences.png" id="differences" alt="Find the differences" usemap="#findTheDifferences">

        <map name="findTheDifferences">
            //the red wires croseed
            <area shape="rect" coords="43.08331298828125,148,97.08331298828125,190" href="#" alt="Sun" id="crossed">
<!--            <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">-->
<!--            <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">-->
        </map>

    </div>
</div>
    <footer id="footer" class="d-flex w-100 justify-content-center align-items-center mx-auto text-center">
        <div class="form-group">
            <input type="text" class="form-control text-center" id="inputAnswer">
        </div>
    </footer>

<script>
    $(document).ready(function() {
        $('#crossed').click(function(e) {
            var offset = $(this).offset();
            alert("you found one!");
        });
    });

$(document).ready(function() {
$('#differences').click(function(e) {
var offset = $(this).offset();
alert(e.pageX - offset.left);
alert(e.pageY - offset.top);
});
});
</script>
<!-- -->
<script type="text/javascript" src="scripts/jquery.imagemapster.js"><script>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../../js/2.js"></script>
</body>
</html>