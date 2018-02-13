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

    $template = new Template();
    echo $template->render('pages/signup.html');
}
);

//Run fat free
$f3->run();