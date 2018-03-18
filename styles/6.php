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
    3/17/18
    Level 6
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

        </div>
        <div class="mx-auto text-center" id="puzzle">
            <h2 id="congrats">Congratuations Detective, you've cracked the </h2><h1 id="code">code</h1>
            <img src="../images/code.png" id="code" alt="theCode">
        </div>
    </div >

</div>
<footer id="footer" class="d-flex w-100 justify-content-center align-items-center mx-auto text-center">
    <div class="form-group">
        <input type="text" class="form-control text-center" id="inputAnswer">
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../js/6.js"></script>

</body>
</html>