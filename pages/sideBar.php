<!--Sarah Elkhart
    29 Jan 2018
    cryptoFunctions.php-->

<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);



/* Open tool bar div */
echo "<div id='mySidenav' class='sidenav'>";

/*Open form */
    echo"<form action=\"#\" method=\"post\">";

        /*tools links*/
        echo"<a href=\"javascript:void(0)\" class=\"closebtn\" onclick=\"closeNav()\">&times;</a>";
        echo"<a href=\"#  \">A -> #</a>";
        echo"<input type=\"text\" id=\"alphaToNumeric\">";
            if( isset($_POST['alphaToNumeric']) )
            {
                $userInput = ($_POST['alphaToNumeric']);
                $results = lettersToNumbers($userInput);
                echo"$results";
            }


        echo"<a href=\"#\"># -> A</a>-->";
        echo"<a href=\"#\">01101101</a>-->";


    echo"</form>";
echo"</div>-->";

/* Tool bar button */
    echo"<button onclick=\"openNav()\">Open tools</button>";



