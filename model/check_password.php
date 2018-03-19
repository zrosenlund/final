<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 3/19/2018
 * Time: 4:36 PM
 */
require_once(getenv('HOME') . "/public_html/328/assignments/final/classes/dbFunctions.php");

if(!empty($_POST["password"])) {
    $dbh = dbFunctions::connect();


    $sql = ("SELECT id FROM users WHERE password = :password");

    //prepare statement
    $statement = $dbh->prepare($sql);
    $password = $_POST["password"];

    //Bind the username parameter
    $statement->bindParam(':password', $password, PDO::PARAM_STR);

    //execute
    $statement->execute();

    //get results
    $result = $statement->fetch(PDO::FETCH_ASSOC) ;
    $check = $statement->rowCount();


    //check if username is already in use
    if($check < 1)
    {
        echo "<span class='status-not-available'> Incorrect Password.</span>";
        return false;
    }
    else return true;
}