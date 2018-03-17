<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 3/15/2018
 * Time: 5:47 PM
 */
ini_set("display_errors", 1);
error_reporting(E_ALL);
?>
<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <!--
    Zachary Rosenlund & Sarah Elkhart
    1/19/18
    home.html
    The view for the index page of my dating site
    -->
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dhurjati" rel="stylesheet">
    <link rel="stylesheet" href="../styles/6.css">
    <link rel="stylesheet" href="../styles/sideBar.css">
    <title>The Enigma Principle</title>
</head>
<body>

<div class="d-flex flex-row h-100" id="body">

    <div class="w-100 d-flex justify-content-center align-items-center p-10" id="main">
        <div class="flex-column mx-auto text-center" id="titleScreen">
<!--            <h1 class="display-2">Use the Tools Given to You</h1>-->
            <br>
<!--            <h1 class="display-2">To Discover the Truth</h1>-->
        </div>
        <div class="mx-auto text-center" id="puzzle">
            <h3>Congratuations Detective, you've found the key to the enigma machine </h3>
            <p id="test"></p>
            <img src="../images/code.png" id="code" alt="theCode" usemap="#code">
            <map name="code">
                <!--the red wires crossed Upper picture-->
                <area coords="616 , 132 , 652 , 182" href="http://www.facebook.com" shape="rect"  />
            </map> <!--close map-->
<script>
    document.addEventListener('click', printMousePos, true);
    function printMousePos(e){

        cursorX = e.pageX;
        cursorY= e.pageY;
        $( "#test" ).text( "pageX: " + cursorX +",pageY: " + cursorY );
    }
</script>
        </div>
    </div>

</div>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/6.js"></script>
</body>
</html>