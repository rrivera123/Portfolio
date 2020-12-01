<?php
//Error reporting for testing purposes
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Logout
//Start Session
session_start();
//Destroy the session
session_destroy();
//Clear the session array for good measure
$_SESSION = array();
//Redirect to the login page
header("Location: login.php");
