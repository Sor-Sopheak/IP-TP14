<?php
    session_start();

    //store session data
    $_SESSION["username"] = "nikita";
    $_SESSION["email"] = "nikita@example.com";

    //retrieve seesion data
    echo $_SESSION["username"];
    echo "<br>";
    echo $_SESSION["email"];
?>