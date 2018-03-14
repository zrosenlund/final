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

<!-- OPEN BODY DIV-->
<div class="d-flex flex-row h-100" id="bodyContainer">

    <?php require('../toolBar.php');?>

    <!-- OPEN PUZZLE CONTAINER DIV-->
    <div class="container mx-auto" id="puzzleContainer">
        <h1 id="results">Find the 5 differences</h1>
        <p id="foundList"></p>
<!--        figure out how to display the numberFound variable-->
            <img src="../../images/findTheDifferences.png" id="differences" alt="Find the differences" usemap="#findTheDifferences">
        <!-- OPEN IMAGE MAP-->
        <map name="findTheDifferences">
            <!--the red wires crossed Upper picture-->
            <area shape="rect" coords="43.08331298828125 , 148 , 97.08331298828125 , 190" href="#" alt="crossed wires" id="crossed">
            <!-- lower picture-->
            <area shape="rect" coords="41.600006103515625 , 556 , 97.60000610351562 , 600" href="#" alt="crossed wires" id="crossed2">

            <!-- the little o missing upper picture -->
            <area shape="rect" coords="226.60000610351562 , 55, 237.60000610351562 , 65" href="#" alt="missingO" id="missingO">
            <!-- lower picture-->
            <area shape="rect" coords="230.60000610351562 , 468 , 233.60000610351562, 480" href="#" alt="missingO" id="missingO2">

            <!-- word "position" replacing rotor-2 upper picture -->
            <area shape="rect" coords="146.60000610351562 , 321, 180.60000610351562 , 328" href="#" alt="positionRotor" id="positionRelpacingRotor">
            <!-- lower picture-->
            <area shape="rect" coords="145.60000610351562  , 731 , 183.60000610351562 , 740" href="#" alt="positionRotor" id="positionRelpacingRotor2">

            <!-- red line on graph moved, upper picture -->
            <area shape="rect" coords="549.6000061035156 , 80.19999694824219, 630.6000061035156 , 92.19999694824219" href="#" alt="graphMoved" id="graphMoved">
            <!-- lower picture-->
            <area shape="rect" coords="545.6000061035156 , 616 , 644.6000061035156, 611" href="#" alt="graphMoved" id="graphMoved2">

            <!-- alphabet gone on right side of graph - upper picture -->
            <area shape="rect" coords="711.4499969482422 , 31.199996948242188, 720.4499969482422 , 361.1999969482422" href="#" alt="missingAlpha" id="missingAlpha">
            <!-- lower picture-->
            <area shape="rect" coords="711.6000061035156 , 148 , 717.6000061035156 , 773" href="#" alt="missingAlpha" id="missingAlpha2">


        </map> <!--close map-->

    </div><!-- close puzzle div-->
</div> <!--close body div-->
    <footer id="footer" class="d-flex w-100 justify-content-center align-items-center mx-auto text-center">
        <div class="form-group">
            <input type="text" class="form-control text-center" id="inputAnswer">
        </div>
    </footer>
<script src="../../js/5.js"></script>

<!-- -->
<script type="text/javascript" src="scripts/jquery.imagemapster.js"><script>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../../js/2.js"></script>
</body>
</html>