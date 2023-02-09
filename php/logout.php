<?php
// Student name: Erik
// Class: Multi plaform 
// Script: php file for handling logout process
session_start(); //  starting the session
unset($_SESSION["id"]);
unset($_SESSION["username"]);
unset($_SESSION["userLastname"]);
header("location: ../pages/login.html");

?>