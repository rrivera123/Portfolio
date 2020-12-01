<?php
//If there is no post data, redirect to the guestbook page
if(empty($_POST)){
    header('location: http://rrivera.greenriverdev.com/my-portfolio/guestbook.php');
}

//Set page specific title and links
$page_title = "Guestbook Submission";
$index_link = 'http://rrivera.greenriverdev.com/my-portfolio/index.php';
$about_link = 'http://rrivera.greenriverdev.com/my-portfolio/index.php#about';
$resume_link = 'http://rrivera.greenriverdev.com/my-portfolio/index.php#resume';
$projects_link = 'http://rrivera.greenriverdev.com/my-portfolio/index.php#projects';
$contact_link = 'http://rrivera.greenriverdev.com/my-portfolio/index.php#contact';
$guestbook_link = 'http://rrivera.greenriverdev.com/my-portfolio/guestbook.php';

//For testing
//ini_set('display_errors', 1);
//error_reporting(E_ALL);
//var_dump($_POST);


//Add page specific javascript
$jsscript = "";

//Add header and database info
include("includes/header.html");
require('includes/functions.php');
require('/home/rriverag/dbcreds.php');

//Set variables from form data
    $isValid = true;
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $title = $_POST['title'];
    $company = $_POST['cname'];
    $email = $_POST['email'];
    $linkedIn = $_POST['linkedin'];
    $howWeMet = implode($_POST['howmet']);
    $otherText = $_POST['other-text'];
    $messageText = $_POST['message-text'];
    $mailingList = isset($_POST['mailinglist']);
    $emailFormat = "";
    date_default_timezone_set("America/Los_Angeles"); //set the time zone
    $timestamp = date("Y/m/d H:i:s"); //create a time stamp
?>

<!-- ###############  HEADER  ############### -->

<div class="jumbotron jumbotron-fluid guestbook_form mb-0 ">
    <div class="container">
        <?php
        //Only validate if POST data is available
        if($_SERVER['REQUEST_METHOD'] == "POST") {

            //Validate first name, if valid assign to variable, else show error
            if (validateName($_POST['fname'])) {
                $fname = $_POST['fname'];
            } else {
                echo "<p class='text-center text-white'>Please enter your first name</p>";
                $isValid = false; // Set flag
            }

            //Validate last name, if valid assign to variable, else show error
            if (validateName($_POST['lname'])) {
                $lname = $_POST['lname'];
            } else {
                echo "<p class='text-center text-white'>Please enter your last name</p>";
                $isValid = false;// Set flag
            }

            //Validate email checkbox, if checked verify email,  if valid assign to variable, else show error
            if (isset($_POST['mailinglist']) || !empty($_POST['email'])) {
                if (validateEmail($_POST['email'])) {
                    $email = $_POST['email'];
                } else {
                    echo "<p class='text-center text-white'>Please enter your a valid email address</p>";
                    $isValid = false; // Set flag
                }
            }

            //Validate a mailing list email format is selected if mailing list is checked, else show error
            if (isset($_POST['mailinglist'])) {
                if (isset($_POST['email-format'])) {
                    $emailFormat = $_POST['email-format'];
                } else {
                    $isValid = false; // Set flag
                    echo "<p class='text-center text-white'>Please choose an email format</p>";
                }
            }

            //Validate LinkedIn if provided, else show error
            if (!empty($_POST['linkedin'])) {
                if (validateLinkedIn($_POST['linkedin'])) {
                    $linkedIn = $_POST['linkedin'];
                } else {
                    $isValid = false; // Set flag
                    echo "<p class='text-center text-white'>Please enter a valid LinkedIn URL</p>";
                }
            }

            //Validate How we met if set in POST, if == "Other"if == "empty" show error
            if (!empty($_POST['howmet'])) {
                $howMet = $_POST['howmet'][0];
                if ($howMet == "empty") {
                    $isValid = false; // Set flag
                    echo "<p class='text-center text-white'>Please choose how we met</p>";
                } elseif ($howMet == "Other" && $_POST['other-text'] == "") {
                    echo "<p class='text-center text-white'>Please explain how we met</p>";
                    $isValid = false; // Set flag
                }
            }

            //Check if all required form data is valid
            if($isValid){
                //prevent sql injection.  Send variable to server to return clean data
                $fname = mysqli_real_escape_string($cnxn, $fname);
                $fname = mysqli_real_escape_string($cnxn, $fname);
                $lname = mysqli_real_escape_string($cnxn, $lname);
                $title = mysqli_real_escape_string($cnxn, $title);
                $company = mysqli_real_escape_string($cnxn, $company);
                $email = mysqli_real_escape_string($cnxn, $email);
                $linkedIn = mysqli_real_escape_string($cnxn, $linkedIn);
                $howWeMet = mysqli_real_escape_string($cnxn, $howWeMet);
                $otherText = mysqli_real_escape_string($cnxn, $otherText);
                $messageText = mysqli_real_escape_string($cnxn, $messageText);
                $mailingList = mysqli_real_escape_string($cnxn, $mailingList);
                $emailFormat = mysqli_real_escape_string($cnxn, $emailFormat);
                $timestamp = mysqli_real_escape_string($cnxn, $timestamp);

                //Create SQL query
                $sql = "INSERT INTO guestbook  VALUES('', '$fname', '$lname', '$title', '$$company',".
                    "'$email', '$linkedIn', '$howWeMet', '$otherText', '$messageText',".
                    "'$mailingList', '$emailFormat', '$timestamp')";

                //Send query to the database
                $success = mysqli_query($cnxn, $sql);

                //If query failed, display error
                if(!$success){
                    echo "<p>Sorry . . . something went wrong</p>";
                    return;
                }
            }
        }
            //If there are no errors, display the information
            if($isValid){
                echo "<div class='text-center pl-5'>";
                echo "<h1 class=\"display-4 text-center pb-5\">Thank you, $fname, for your submission!</h1>";
                echo "<p><strong>Timestamp:</strong>       $timestamp </p>";
                echo "<p><strong>First Name:</strong>      $fname</p>";
                echo "<p><strong>Last Name:</strong>      $lname </p>";
                echo "<p><strong>Job Title:</strong>    $title</p>";
                echo "<p><strong>Company Name:</strong>   $company</p>";
                echo "<p><strong>LinkedIn URL:</strong>    $linkedIn</p>";
                echo "<p><strong>How We Met:</strong>     $howWeMet</p>";
                echo "<p><strong>Other:</strong>       $otherText</p>";
                echo "<p><strong>Message:</strong>       $messageText</p>";
                echo "<p><strong>Mailing List:</strong>   $mailingList</p>";
                echo "<p><strong>Email Format:</strong>   $emailFormat </p>";
                echo "</div>";
            }
            //There is an error, display error message
            else{

                echo "<h1 class=\"display-4 text-center\">The form is invalid, 
                        please correct the errors and re-submit</h1>";
            }
        ?>
    </div>
</div>
<?php
//Add footer
include("includes/footer.html")?>