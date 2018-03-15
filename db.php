<?php

    //to connect to database

    $connection = mysqli_connect("localhost", "root", "", "loginapp");
    global $connection;

    if(!$connection){
        //will not let anymore code to run if database is not connected
        die("Database connection failed");
    }

?>