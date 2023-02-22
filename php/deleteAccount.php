<?php
ini_set('display_errors',1);
// Script to handle account Deletion
// Student: Erik McSeveney
// Assessment 2 part 3, outcome 4

// we start a session variable
session_start();

// checking if the user if logged
if(!$_SESSION['id']){
    // if not logged, redirect to log page
    header(location: login.html);
}
else{
    // if logged in

    // get the userID
    $userID=$_SESSION['id'];
    // Get the username
    $userFirstName=$_SESSION['firstname'];

    // database details
    $host="localhost";
    $user="Erik";
    $password="corwin60";
    $db="BorderkingDatabase";

    // make a new connection
    $com=new mysqli($host,$user,$password,$db);

    // Check connection
    if ($com->connect_error) {
        die("Connection to database failed: " . $conn->connect_error);
        exit();
    }
    else{echo "Connected to the database";}

    // SQL query
    $sql="DELETE FROM user WHERE id='$userID' AND firstname='$userFirstName'";

    if($com->query($sql)===true){
        // destroy session variables
        session_destroy();
        // clean echoed
        ob_clean();
        echo"You have sucessfully deleted your account <br><br>";
        $link_address="../index.html";
        echo"<a href='$link_address'>Back</a>";
    }
    else{
        echo"Failed to delete account" . $com->connect_error;
    }
    $com->close();

}
?>