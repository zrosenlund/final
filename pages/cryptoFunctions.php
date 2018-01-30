<!--Sarah Elkhart
    29 Jan 2018
    cryptoFunctions.php-->

<?php

//function that converts letters to numbers
function lettersToNumbers($string)
{
    //associative array to use as key
    $alpha = array(1=> "A",  2=> "B",  3=> "C",  4=> "D",  5=> "E",
        6=> "F",  7=> "G",  8=> "H",  9=> "I", 10=> "J",
        11=> "K", 12=> "L", 13=> "M", 14=> "N", 15=> "O",
        16=> "P", 17=> "Q", 18=> "R", 19=> "S", 20=> "T",
        21=> "U", 22=> "V", 23=> "W", 24=> "X", 25=> "Y", 26=> "Z");

    //initate variables
    $result = $num = "";

    //make string uppercase
    $string = strtoupper($string);

    //turn string into an array
    $letters = explode(" ", $string, 20);

    //loop through letters array searching through alpha array and put result into variable
    foreach($letters as $letter)
    {
        $num = array_search($letter , $alpha);
        $result .= $num." ";
    }

    return $result;
}

