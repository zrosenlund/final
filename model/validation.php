<?php

function validUsername($username)
{


    if(ctype_alnum($username) && !empty($username))
    {
        return true;
    }
    return false;
}

function validPassword($password)
{
    if(ctype_alnum($password) && !empty($password))
    {
        return true;
    }
    return false;
}

$errors = array();



$success = sizeof($errors) == 0;



