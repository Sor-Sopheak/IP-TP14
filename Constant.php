<?php 
    define("EMAIL", "me@example.com");
    echo EMAIL;

    echo "<br>"."----------------------------------------------------"."<br>";

    define("myCon", true);
    if (myCon) { //Evaluates to true
        echo myCon;
    } else{
        echo "flase myCon";
    }

    echo "<br>"."----------------------------------------------------"."<br>";

    define("ONECONSTANT", "some value"); //Invalid constant name
    echo ONECONSTANT;

    echo "<br>"."----------------------------------------------------"."<br>";

    define("CONSTANT", "Hello world.");
    echo CONSTANT; //output "Hello world."
?>