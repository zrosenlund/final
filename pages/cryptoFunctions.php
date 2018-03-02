<!--Sarah Elkhart
    29 Jan 2018
    cryptoFunctions.php-->

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

////testing functions
//$results = lettersShift("A B C D", 2);
//$results2 = lettersToNumbers("A B C D E F");
//$results3 = numbersToLetters("5 14  4 5");
//$results4 = binaryToLetters("01000001 01000010 01000011");

//echo "$results $results2 $results3 $results4";

//function that converts numbers to letters
function numbersToLetters($string)
{

    //remove HTML tags and ASCII values > 127
    $strippedString = filter_var($string, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

    if(!ctype_alpha($strippedString))
    {
        return "Try again";
    }
    echo"inside loop";
    //associative array to use as key
    $alpha = array( "A"=>"1", "B"=>"2" , "C"=>"3" , "D"=>"4" , "E"=>"5" ,
        "F"=>"6" , "G"=>"7" , "H" => "8",  "I"=>"9" , "J"=>"10" ,
        "K"=>"11" , "L"=>"12" , "M"=>"13" , "N"=>"14" , "O"=>"15" ,
        "P" => "16", "Q"=>"17" ,"R"=>"18" , "S"=>"19" , "T"=>"20" ,
        "U"=>"21" , "V"=>"22" , "W"=>"23" , "X"=>"24" , "Y"=>"25" , "Z"=>"26" );

    //initate variables
    $result = $num = "";


    //turn string into an array
    $numbers = explode(" ", $strippedString, 30);

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
    $alpha = array( 1=>"A" ,  2=>"B" , 3=>"C" ,  4=>"D" ,  5=>"E" ,
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
    $binaryArray = array(
            "A"=> "01000001", "B"=> "01000010", "C"=> "01000011", "D"=> "01000100",
            "E"=> "01000101", "F"=> "01000110", "G"=> "01000111", "H"=> "01001000",
            "I"=> "01001001", "J"=> "01001010", "K"=> "01001011", "L"=> "01001100",
            "M"=> "01001101", "N"=> "01001110", "O"=> "01001111", "P"=> "01010000",
            "Q"=> "01010001", "R"=> "01010010", "S"=> "01010011", "T"=> "01010100",
            "U"=> "01010101", "V"=> "01010110", "W"=> "01010111", "X"=> "01011000",
            "Y"=> "01011001", "Z"=> "01011010" );

    //initate variables
    $result = $num = "";

    //turn string into an array
    $letters = explode(" ", $string, 30);

    //loop through letters array searching through alpha array and put result into variable
    foreach($letters as $letter)
    {
        $num = array_search($letter , $binaryArray);
        $result .= $num." ";
    }
    return $result;
}

//this doesn't work yet
function lettersShift($string, $number)
{
    $lettersArray = array(1 => "A", 2 => "B", 3 => "C", 4 => "D", 5 => "E", 6 => "F",
                          7 => "G", 8 => "H", 9 => "I", 10 => "J",11 => "K", 12 => "L",
                          13 => "M", 14 => "N", 15 => "O", 16 => "P", 17 => "Q", 18 => "R",
                          19=> "S", 20 => "T", 21 => "U", 22 => "V", 23 => "W", 24 => "X",
                          25 => "Y", 26 => "Z");

    //search through array for input
    //initate variables
    $result = $num = $shiftLetter= "";

    //turn string into an array
    $letters = explode(" ", $string, 30);

    //loop through letters array searching through alpha array and put result into variable
    foreach($letters as $letter)
    {
        $num = array_search($letter , $lettersArray);
        $num = $num + $number;
        $shiftLetter .= $lettersArray[$num];
    }
    return $shiftLetter;

}