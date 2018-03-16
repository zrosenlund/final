<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 3/16/2018
 * Time: 3:17 PM
 */

function connect()
{
    try {
        //Instantiate a database object
        $dbh = new PDO(DB_DSN, DB_USERNAME,
            DB_PASSWORD);
        return $dbh;
    } catch (PDOException $e) {
        echo $e->getMessage();
        return;
    }
}

if(!empty($_POST["username"])) {
    $dbh = connect();


    $sql = ("SELECT count(*) FROM users WHERE username= :username");

    //prepare statement
    $statement = $dbh->prepare($sql);
    $username = $_POST["username"];

    //Bind the username parameter
    $statement->bindParam(':username', $username, PDO::PARAM_STR);

    //execute
    $statement->execute();

    //get results
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    //check if username is already in use
    if(!empty($result))
        {
            echo "<span class='status-not-available'> Username Not Available.</span>";
        }

    }