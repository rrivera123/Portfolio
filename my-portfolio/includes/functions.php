<?php
//FORM VALIDATION FUNCTIONS
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Validate name
function validateName($name){
    //Name is not empty and contains alpha numeric characters only
    return !empty($name) && ctype_alpha($name);
}

//Validate Email if supplied. IF mailing list checkbox is checked
//then email MUST be supplied.
function validateEmail($email){
    $patternEmail = '^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$^';
    return preg_match($patternEmail, $email);
}

//Validate LinkedIn address
function validateLinkedIn($linkedIn){
    $patternLinkedIn = "^(http|https)(:\/\/www\.)([a-zA-Z0-9_-]+)(\.com)^";
    return preg_match($patternLinkedIn, $linkedIn);
}

//Validate "How we met" answer valid.
function validateHowMet($howMet){

}

