<?php
//Start session
session_start();

//Check if logged in is set
if(!isset($_SESSION['loggedin'])){
    //Store the page that i'm currently on in the session
    $_SESSION['page'] = $_SERVER['SCRIPT_URI'];

    //Redirect to the login page
    header("location: login.php");
}