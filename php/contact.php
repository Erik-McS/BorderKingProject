<?php
ini_set('display_errors',1);
// Script to handle the Contact Us form and save them on the database
// Student: Erik McSeveney
// Assessment 2 part 3, outcome 4

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
}
// connection ok, printintg confirmation
echo "Connected to the database";

if(isset($_POST['cSubmit'])){

    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $comment=$_POST['comment'];

    // we use a PHP API to hash the password


    // we use a prepare statement to increase security
    $statement=$com->prepare("INSERT INTO comments(firstname,lastname,email,subject,comment) VALUES(?,?,?,?,?)");

    // we now bind the statement
    $statement->bind_param("sssss",$fname,$lname,$email,$subject,$comment);
    $statement->execute();
    header("Location: ../pages/thankyou.html");
}
// if the form was not submitted
else{
    echo"The form was not submitted correctly";
}

?>