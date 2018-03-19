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
$f3->route('POST /signup', function ($f3) {

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
            $_SESSION['player']->setLevel(3);
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/3.php');
            break;
//LEVEL 4
        case '4':
            $_SESSION['player']->setLevel(4);
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/4.php');
            break;

        //LEVEL 5
        case '5':
            $_SESSION['player']->setLevel(5);
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/5.php');
            break;


        //LEVEL 6
        case '6':
            $_SESSION['player']->setLevel(6);
            $f3->set('level', $_SESSION['player']->getLevel());

            require "pages/toolBar.php";

            echo Template::instance()->render('pages/levels/6.php');
            break;

        //LEVEL 7
        case '7':
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
