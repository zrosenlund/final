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
    <link rel="stylesheet" href="../../styles/1.css">
    <link rel="stylesheet" href="../../styles/sideBar.css">
    <title>The Enigma Principle</title>
</head>
<body>


<div class="d-flex flex=row h-100" id="body">

    <?php include ('../toolBar.php');?>

    <div class="w-100 mx-auto d-flex justify-content-center align-items-center p-10" id="main">
        <div class="flex-column mx-auto text-center" id="titleScreen">
            <h1 class="display-2">Use the Tools Given to You</h1>
            <br>
            <h1 class="display-2">To Discover the Truth</h1>
        </div>
    </div>

</div>

<footer id="footer" class="d-flex w-100 justify-content-center align-items-center mx-auto text-center">
    <div class="form-group">
        <input type="text" class="form-control text-center" id="inputAnswer">
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script src="../../js/1.js"></script>
</body>
</html>