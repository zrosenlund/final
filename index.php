<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 1/19/2018
 * Time: 5:18 PM
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');
require("/home/selkhart/config.php");

session_start();

$dbh = dbFunctions::connect();

//Create an instance of the Base class
$f3 = Base::instance();

//****************************************************** ROUTES *************************
//Define a default route
$f3->route('GET /', function () {

    echo Template::instance()->render("pages/home.html");
}
);

//****************************************************** SIGN UP *************************
$f3->route('GET|POST /signup', function ($f3) {
    $username = $_POST['createUsername'];
    $password = $_POST['createPassword1'];
    $f3->set('username', $_POST['createUsername']);
    $f3->set('password', $_POST['createPassword1']);

    require_once('model/validation.php');

    if(!validUsername($username)) {
        $errors['username'] = 'Please enter a valid username.';
    }

    if(!validPassword($password)) {
        $errors['password'] = 'Please enter a valid password.';
    }

    if (sizeof($errors) > 0) {
        $_SESSION['errors'] = $errors;
        header("location: ../");
    }


    $result = dbFunctions::insertUser($username, $password, 1);

    echo Template::instance()->render("pages/signup.html");
});


//*******************************************************LEVELS **************************


//Define a default route
$f3->route('GET /levels/@pageName', function ($f3, $params) {

    switch ($params['pageName']) {

//MENU
        case 'menu' :

            //set route
            echo Template::instance()->render('pages/menu.html');
            break;

//LEVEL 1
        case '1' :

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/1.php');
            break;
//LEVEL 2
        case '2':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/2.php');
            break;

//LEVEL 3
        case '3':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/3.php');
            break;
//LEVEL 4
        case '4':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/4.php');
            break;

        //LEVEL 5
        case '5':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/5.php');
            break;

        //LEVEL 5
        case '6':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/6.php');
            break;

        default:
            $f3->error(404);
    }
}

//****************************************************** CLOSE LEVELS  *************************

);

//Run fat free
$f3->run();
