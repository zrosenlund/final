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

//Create an instance of the Base class
$f3 = Base::instance();

//****************************************************** ROUTES *************************
//Define a default route
$f3->route('GET /', function () {

    echo Template::instance()->render("pages/home.html");
}
);

//****************************************************** SIGN UP *************************
$f3->route('POST /signup', function ($f3) {
    $_SESSION['username'] = $_POST['createUsername'];
    $_SESSION['password'] = $_POST['createPassword1'];
    $f3->set('username', $_POST['createUsername']);
    $f3->set('password', $_POST['createPassword1']);

    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }

    //Define the query
    $sql = "INSERT INTO users(username, password, level)
           VALUES (:username, :password, :level)";

    //Prepare the statement
    $statement = $dbh->prepare($sql);

    //Bind the parameters
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $level = 1;
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->bindParam(':password', $password, PDO::PARAM_STR);
    $statement->bindParam(':level', $level, PDO::PARAM_STR);

    //Execute
    $statement->execute();

    echo Template::instance()->render("pages/signup.html");

});


//*******************************************************LEVELS **************************


//Define a default route
$f3->route('GET /levels/@pageName', function ($f3, $params) {

    switch ($params['pageName']) {

//MENU
        case 'menu' :

            //set route
            echo Template::instance()->render('/levels/menu.php');
            break;

//LEVEL 1
        case '1' :

            echo Template::instance()->render('/levels/1.php');
            break;
//LEVEL 2
        case '2':

            echo Template::instance()->render('/levels/2.php');

            break;

//LEVEL 3
        case '3':
            echo Template::instance()->render('pages/levels/3.php');
            break;
//LEVEL 4
        case '4':

            echo Template::instance()->render('pages/levels/4.php');
            break;

        //LEVEL 5
        case '5':
            echo Template::instance()->render('pages/levels/5.php');
            break;

        default:
            $f3->error(404);
    }
}

//****************************************************** CLOSE LEVELS  *************************

);

//Run fat free
$f3->run();
