<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 3/17/2018
 * Time: 10:04 PM
 */

require_once '/home/selkhart/config.php';

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