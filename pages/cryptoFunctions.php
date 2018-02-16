<!--Sarah Elkhart
    29 Jan 2018
    cryptoFunctions.php-->

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);


echo "Below";
$results = lettersToNumbers("A B C D E F G H I J K L M N O P Q R S T U V W X Y Z");
echo "$results yo";

//function that converts numbers to letters
function numbersToLetters($string)
{
    //associative array to use as key
    $alpha = array( "A"=>"1", "B"=>"2" , "C"=>"3" , "D"=>"4" , "E"=>"5" ,
        "F"=>"6" , "G"=>"7" , "H" => "8",  "I"=>"9" , "J"=>"10" ,
        "K"=>"11" , "L"=>"12" , "M"=>"13" , "N"=>"14" , "O"=>"15" ,
        "P" => "16", "Q"=>"17" ,"R"=>"18" , "S"=>"19" , "T"=>"20" ,
        "U"=>"21" , "V"=>"22" , "W"=>"23" , "X"=>"24" , "Y"=>"25" , "Z"=>"26" );

    //initate variables
    $result = $num = "";


    //turn string into an array
    $numbers = explode(" ", $string, 30);

    //loop through letters array searching through alpha array and put result into variable
    foreach($numbers as $number)
    {
        $num = array_search($number , $alpha);
        $result .= $num." ";
    }
    return $result;
}


//function that converts letters to numbers
function lettersToNumbers($string)
{
    //associative array to use as key
    $alpha = array("A" =>1 , "B" =>2 ,  "C" => 3, "D" =>4 ,  "E"=>5 ,
        6=> "F",  7=> "G",  8=> "H",  9=> "I", 10=> "J",
        11=> "K", 12=> "L", 13=> "M", 14=> "N", 15=> "O",
        16=> "P", 17=> "Q", 18=> "R", 19=> "S", 20=> "T",
        21=> "U", 22=> "V", 23=> "W", 24=> "X", 25=> "Y", 26=> "Z");

    //initate variables
    $result = $num = "";

    //make string uppercase
    $string = strtoupper($string);

    //turn string into an array
    $letters = explode(" ", $string, 30);

    //loop through letters array searching through alpha array and put result into variable
    foreach($letters as $letter)
    {
        $num = array_search($letter , $alpha);
        $result .= $num." ";
    }
    return $result;
}


//function that converts binary to letters
function binaryToLetters($string)
{
    //associative array to use as key
    $binaryArray = array("E" => 01000101 , "N" => 01001110 ,
        "I" => 01001001 , "G" => 01000111  ,  "E"=> 01001001  ,
        6=> "F",  7=> "G",  8=> "H",  9=> "I", 10=> "J",
        11=> "K", 12=> "L", 13=> "M", 14=> "N", 15=> "O",
        16=> "P", 17=> "Q", 18=> "R", 19=> "S", 20=> "T",
        21=> "U", 22=> "V", 23=> "W", 24=> "X", 25=> "Y", 26=> "Z");

    //initate variables
    $result = $num = "";

    //make string uppercase
    $string = strtoupper($string);

    //turn string into an array
    $letters = explode(" ", $string, 30);

    //loop through letters array searching through alpha array and put result into variable
    foreach($letters as $letter)
    {
        $num = array_search($letter , $alpha);
        $result .= $num." ";
    }
    return $result;
}


