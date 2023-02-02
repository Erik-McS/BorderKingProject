<?php
ini_set('display_errors',1);
// Script to handle account login
// Student: Erik McSeveney
// Assessment 2 part 3, outcome 4

// we start a session variable
session_start();
// we clear all session variables
session_unset();

// we open a conection to Database
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
    exit();
}
else{echo "Connected to the database";}

if(isset($_POST['submit'])){

    // get the email and password from the posted fileds
    $email=$_POST['email'];
    $password=$_POST['password'];
    // create a SQL query to search the user table
    $sql="SELECT * FROM user WHERE email='$email'";
    // execute the query and hold the results in the $sql variable
    $result=$com->query($sql);
    // we check if we got a result
    if($result){
        // print the number of rows returned
        echo "Returned rows number: " . $result->num_rows;
        // we loop the numbers of rows returned    
        while($row=$result->fetch_assoc())
        {
            // checking if the posted password is the same that the one in the database
            if(password_verify($password,$row['password'])){
            // if true, we create the session variables
            echo "Hello";
            $_SESSION['id']=$row['id'];
            $_SESSION['firstname']=$row['firstname'];
            $_SESSION['lastname']=$row['lastname'];
            $_SESSION['email']=$row['email'];
            }
        }
        if($_SESSION['id']){
            // if logged in, we redirect to the user page
            header("Location: useraccount.php")
        }
        else{
            echo"User not found"
        }
    }
}
// if the form was not submitted
else{
    echo"The form was not submitted correctly";
}

?>