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
require_once('/home/zrosenlu/config.php');
require_once("classes/dbFunctions.php");

session_start();

//Create an instance of the Base class
$f3 = Base::instance();

//****************************************************** ROUTES *********************************
//Define a default route
$f3->route('GET /', function () {

    echo Template::instance()->render("pages/home.html");
}
);

//****************************************************** SIGN UP *********************************
$f3->route('GET|POST /signup', function ($f3) {

    require_once('model/validation.php');

    $_SESSION['username'] = $_POST['createUsername'];
    $_SESSION['password'] = $_POST['createPassword1'];
    $f3->set('username', $_POST['createUsername']);
    $f3->set('password', $_POST['createPassword1']);

    //Bind the parameters
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $level = 1;

    if (validUsername($username))
    {
        $_SESSION['player'] = new Player($username, 1);
        dbFunctions::insertUser($username, $password, $level);
        echo Template::instance()->render("pages/signup.html");
    }
});

//****************************************************** SIGN IN *********************************
$f3->route('GET|POST /signin', function ($f3) {

    $_SESSION['username'] = $_POST['inputUsername'];
    $_SESSION['password'] = $_POST['inputPassword1'];
    $f3->set('playerName', $_POST['inputUsername']);

    $username = $_SESSION['username'];

    $result = dbFunctions::getUser($username);
    $_SESSION['player'] = new Player($username, $result['level']);
    echo Template::instance()->render("pages/signin.html");
});

//*******************************************************LEVELS **************************


//Define a default route
$f3->route('GET /levels/@pageName', function ($f3, $params) {

    switch ($params['pageName']) {

//MENU
        case 'menu' :
            if ($_SESSION['player']->getLevel() < 2) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 2);
                $_SESSION['player']->setLevel(2);
            }

            $f3->set('level', $_SESSION['player']->getLevel());

            //set route
            echo Template::instance()->render('pages/menu.html');
            break;

//LEVEL 1
        case 'yak' :
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/1.php');
            break;
//LEVEL 2
        case 'du':
            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/2.php');
            break;

//LEVEL 3
        case 'sey':
            if ($_SESSION['player']->getLevel() < 3) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 3);
                $_SESSION['player']->setLevel(3);
            }
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/3.php');
            break;
//LEVEL 4
        case 'char':
            if ($_SESSION['player']->getLevel() < 4) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 4);
                $_SESSION['player']->setLevel(4);
            }
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/4.php');
            break;

        //LEVEL 5
        case '5':
            if ($_SESSION['player']->getLevel() < 5) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 5);
                $_SESSION['player']->setLevel(5);
            }
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/5.php');
            break;


        //LEVEL 6
        case 'shash':
            if ($_SESSION['player']->getLevel() < 6) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 6);
                $_SESSION['player']->setLevel(6);
            }
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/6.php');
            break;

        //LEVEL 7
        case 'haft':
            if ($_SESSION['player']->getLevel() < 7) {
                dbFunctions::setLevel($_SESSION['player']->getName(), 7);
                $_SESSION['player']->setLevel(7);
            }
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/7.php');
            break;

        default:
            $f3->error(404);
    }
}

//****************************************************** CLOSE LEVELS  *************************

);

//Run fat free
$f3->run();
