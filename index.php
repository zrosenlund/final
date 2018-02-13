<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 1/19/2018
 * Time: 5:18 PM
 */
//Require the autoload file
require_once('vendor/autoload.php');

session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//Define a default route
$f3->route('GET /', function() {
    $template = new Template();
    echo $template->render('pages/home.html');
}
);

$f3->route('POST /signup', function($f3) {
    $_SESSION['username'] = $_POST['createUsername'];
    $_SESSION['password'] = $_POST['createPassword1'];
    $f3->set('username', $_POST['createUsername']);
    $f3->set('password', $_POST['createPassword1']);

    require("../../../userdb.php");

    $username = mysqli_real_escape_string($cnxn, $_SESSION['username']);
    $password = mysqli_real_escape_string($cnxn, $_SESSION['password']);

    $sql = "SELECT * FROM users";
    $result = mysqli_query($cnxn, $sql);
    if ($row = mysqli_fetch_assoc($result)){
        $sql = "INSERT INTO users VALUES ($username, $password, 1)";
        $result = mysqli_query($cnxn, $sql);
        if(!$result){
            print("<p>Error:".mysqli_error($cnxn)."</p>");
        }
    }
    

    $template = new Template();
    echo $template->render('pages/signup.html');
}
);

//Run fat free
$f3->run();