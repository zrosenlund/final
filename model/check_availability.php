<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 3/16/2018
 * Time: 3:17 PM
 */

require("connection.php");
require("../classes/dbFunctions.php");

if(!empty($_POST["username"])) {
    $dbh = dbFunctions::connect();


    $sql = ("SELECT id FROM users WHERE username = :username");

    //prepare statement
    $statement = $dbh->prepare($sql);
    $username = $_POST["username"];

    //Bind the username parameter
    $statement->bindParam(':username', $username, PDO::PARAM_STR);

    //execute
    $statement->execute();

    //get results
    $result = $statement->fetch(PDO::FETCH_ASSOC) ;
    $check - $result->rowCount() ;

    //check if username is already in use
    if($checkt === 1)
        {
            echo "<span class='status-not-available'> Username Not Available.</span>";
        }

    }