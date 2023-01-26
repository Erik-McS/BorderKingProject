<?php

// php file that holds database connection details.
// Student : Erik McSeveney
// Class: Developping websites for multiplatforms
// Assessment 2 part 3, outcome 4

function connect(){

    // database user details
    $host="localhost";
    $user="Erik";
    $password="corwin60";
    $db="BorderkingDatabase";

    // make a new connection
    $com=new mysqli($host,$user,$password,$db);

    // Check connection
    if ($com->connect_error) {
    die("Connection to database failed: " . $conn->connect_error);
    }
    // connection ok, printintg confirmation
    echo "Connected to the database";

}

connect();







?>