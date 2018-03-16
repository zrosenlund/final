<?php
/**
 * Created by PhpStorm.
 * User: zrose
 * Date: 3/15/2018
 * Time: 4:03 PM
 */

class dbFunctions
{

    static function connect()
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

    static function getMembers()
    {
        global $dbh;
        //1. Define the query
        $sql = "SELECT * FROM users ORDER BY username";
        //2. Prepare the statement
        $statement = $dbh->prepare($sql);
        //3. Bind parameters
        //4. Execute the query
        $statement->execute();
        //5. Get the results
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        //print_r($result);
        return $result;
    }

    static function insertUser($username, $password, $level)
    {
        global $dbh;

        //Define the query
        $sql = "INSERT INTO users(username, password, level)
        VALUES (:username, :password, :level)";

        //Prepare the statement
        $statement = $dbh->prepare($sql);
        $statement->bindParam(':username', $username, PDO::PARAM_STR);
        $statement->bindParam(':password', $password, PDO::PARAM_STR);
        $statement->bindParam(':level', $level, PDO::PARAM_INT);

        //4. Execute the query
        $result = $statement->execute();

        //5. Return the result
        return $result;
    }



}