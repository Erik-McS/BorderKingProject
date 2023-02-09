<?php
ini_set('display_errors',1);
// Script to handle account login
// Student: Erik McSeveney
// Assessment 2 part 3, outcome 4

// we start a session variable
session_start();

// check if user is logged
if(!$_SESSION['id']){
    // redirect to the login page    
    header('location: ../pages/login.html');
}
else
{
    // get details of the logged user
    $loggedUserId=$_SESSION['id'];
    $firstName=$_SESSION['firstname'];   
    // connection details
    $host="localhost";
    $user="Erik";
    $password="corwin60";
    $db="BorderkingDatabase";

    // create a connection
    $com=new mysqli($host,$user,$password,$db);

    // Check connection
    if ($com->connect_error) {
        die("Connection to database failed: " . $com->connect_error);
    }
    else{echo "Connected to the database<br>";}

    // check if form is submitted
    if($_POST['submit'])
    {
        // get data from the form
        $oldPassword=$_POST['oldPassword'];
        $newPassword=$_POST['newPassword'];

        // hash the new password
        $hashNewPass=password_hash($newPassword,PASSWORD_BCRYPT);

        // query the database
        $sql="UPDATE user SET password='$hashNewPass' WHERE id='$loggedUserId' AND firstname='$firstName'";

        // check if the query is successful
        if($com->query($sql)===true){
            echo"Password updated successfully";
            
            $link_address="account.php";
            echo"<br><br><a href='$link_address'>Back</>";      
        }
        else{
            
            echo"Error removing the password";
        }

    }else
    {
        echo"No connection";
    }
}
?>