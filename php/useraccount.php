<?php

// Script to handle account session
// Student: Erik McSeveney
// Assessment 2 part 3, outcome 4

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Importing Bootstrap-->
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script> 

    <!--Icons library called Font Awesome 5-->
    <script src="https://kit.fontawesome.com/9edb04f5e9.js" crossorigin="anonymous"></script>

    <!--Importing Lato fonts from Google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300&display=swap" rel="stylesheet">

    <!--Linking the CSS file-->
    <link rel="stylesheet" href="../style/style.css">

    <title>Profile Border King</title>
</head>

<body class="bodyBBK textGreen">

<?php
// php script for adding html code
// if session exists, do the following
if($_SESSION['id']){?>
<h1 class="textGreen">Welcome <?php echo $_SESSION['firstname']?></h1>   

<?php}
// else
else header("location: ../index.html")
?>


    <script src="../scripts/scripts.js"></script>    
</body>
</html>
