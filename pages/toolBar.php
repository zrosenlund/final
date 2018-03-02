<?php
/**
 * Created by PhpStorm.
 * User: selkh
 * Date: 2/22/2018
 * Time: 3:18 AM
 */

ini_set("display_errors", 1);
error_reporting(E_ALL);

include ("cryptoFunctions.php");

echo'<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>';

echo"<script>";
echo" //hide text inputs and submit boxes
      \$(\".decode\").hide();
      \$(\".submit\").hide();\ "; /*close echo*/

    //show text input and submit boxes when <a> is clicked

    //show text input and hide the rest
/*open echo*/
  echo"  \$(\"#link1\").click(function(){
        \$(\"#decode1\").toggle();
        \$(\"#decode2\").hide();
        \$(\"#submit2\").hide();
        \$(\"#decode3\").hide();
        \$(\"#submit3\").hide();
        \$(\"#decode4\").hide();
        \$(\"#submit4\").hide();
    });";                       /*close echo*/

    //show button when first input box is clicked
    echo" \$(\"#decode1\").click(function(){
        \$(\"#submit1\").show();
    });";/*close echo*/

/*open echo*/
    echo'
 
    //when submitted, call JSON file for that input **NOT WORKING YET**
    $("#submit1").click(function(){
        var input = $("#decode1").val();
        doneInput = lettersToNumbers(input)";, function(result) {';
        echo"<p>doneInput</p>;";





 /*close echo*/

/*open echo*/
    echo"
    // text input when submit button is hit
    \$(\"#submit1\").on(\"click\", function() {
        var choice = \$(\"#decode1\").val();
        \$(\"#result1\").html(choice);
    })
    //TOOL 2
    //text input
    \$(\"#link2\").click(function(){
        \$(\"#decode2\").toggle();
        \$(\"#decode1\").hide();
        \$(\"#submit1\").hide();
        \$(\"#decode3\").hide();
        \$(\"#submit3\").hide();
        \$(\"#decode4\").hide();
        \$(\"#submit4\").hide();
    });

    //button
    \$(\"#decode2\").click(function(){
        \$(\"#submit2\").show();
    });

    //TOOL 3
    //text input
    \$(\"#link3\").click(function(){
        \$(\"#decode3\").toggle();
        \$(\"#decode1\").hide();
        \$(\"#submit1\").hide();
        \$(\"#decode2\").hide();
        \$(\"#submit2\").hide();
        \$(\"#decode4\").hide();
        \$(\"#submit4\").hide();
    });

    //button
    \$(\"#decode3\").click(function(){
        \$(\"#submit3\").show();
    });

    //TOOL 4
    //text input
    \$(\"#link4\").click(function(){
        \$(\"#decode4\").toggle();
        \$(\"#decode1\").hide();
        \$(\"#submit1\").hide();
        \$(\"#decode2\").hide();
        \$(\"#submit2\").hide();
        \$(\"#decode3\").hide();
        \$(\"#submit3\").hide();
    });

    //button
    \$(\"#decode4\").click(function(){
        \$(\"#submit4\").show();
    });

\";




";


?>


<script>
    // another note to self: Use the keypress action to make submit button to show



</script>