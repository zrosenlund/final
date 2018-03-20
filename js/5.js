//****************************************************************************************
//** BODY FUNCTIONS
//****************************************************************************************
//boolean to show footer
$('#footer').css("opacity", "0");

var showFooter = false;

//function run when correct answer is input
$('#inputAnswer').on('keyup', function() {
    var answer = $('#inputAnswer').val();
    answer = answer.toLowerCase();

    if (answer === 'next')
    {
        showFooter = true;
        $('#puzzle').fadeOut("slow");
        window.location.replace("shash").delay("slow");
    }
});

//****************************************************************************************
// ** FOOTER FUNCTIONS
//****************************************************************************************

//this will show the footer bar when enter is pressed

    if (showFooter = true)
    {
        // Enter key pressed
        $('#footer').css("opacity", "1");
    };


//*****************************************************************************************
//** IMAGE MAP FUNCTIONS
//*****************************************************************************************

//function run when someone finds all five differences
function winner()
{
    $("#differences").hide();
    $( "#results" ).replaceWith( "<h1>Passcode: next." );
}

function addToFound()
{
    $( "#foundList" ).replaceWith( "<h3 id='foundList'>Number found: "  + numberFound + "</h3>" );
}

//booleans to indicate if an item's been found
foundOne = false;
foundTwo = false;
foundThree= false;
foundFour = false;
foundFive = false;

//UPPER PICTURE FUNCTIONS*****************

//crossed wires- foundOne
var numberFound = 0;
$(document).ready(function() {
    $('#crossed').click(function(e) {
        if (!foundOne)
        {
            numberFound++;
            var offset = $(this).offset();
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundOne = true;
        }
        else
        {
            alert("You've already found this one");
        }


    });
});
//missing O -foundTwo
$(document).ready(function() {
    $('#missingO').click(function(e) {
        if (!foundTwo)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundTwo = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//word "position" taking place of rotor 2- foundThree
$(document).ready(function() {
    $('#positionRelpacingRotor').click(function(e) {
        if(!foundThree)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundThree = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//graph line moved - foundFour
$(document).ready(function() {
    $('#graphMoved').click(function(e) {
        if(!foundFour)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundFour = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//alphabet missing - foundFive
$(document).ready(function() {
    $('#missingAlpha').click(function(e) {
        if(!foundFive)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundFive = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//LOWER PICTURE FUNCTIONS*****************

// crossed wires- foundOne
$(document).ready(function() {
    $('#crossed2').click(function(e) {
        if (!foundOne)
        {
            numberFound++;
            var offset = $(this).offset();
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundOne = true;
        }
        else
        {
            alert("You've already found this one");
        }


    });
});
//MISSING O -foundTwo
$(document).ready(function() {
    $('#missingO2').click(function(e) {
        if (!foundTwo)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundTwo = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//word "position" taking place of rotor 2- foundThree
$(document).ready(function() {
    $('#positionRelpacingRotor2').click(function(e) {
        if(!foundThree)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundThree = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//graph line moved
$(document).ready(function() {
    $('#graphMoved2').click(function(e) {
        if(!foundFour)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundFour = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

//alphabet missing
$(document).ready(function() {
    $('#missingAlpha2').click(function(e) {
        if(!foundFive)
        {
            numberFound++;
            addToFound();
            if(numberFound >= 5)
            {
                winner();
            }
            foundFive = true;
        }
        else
        {
            alert("You've already found this one");
        }

    });
});

