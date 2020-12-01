<?php
//Set page specific title and links
$page_title = "Guestbook";
$index_link = 'index.php';
$about_link = 'index.php#about';
$resume_link = 'index.php#resume';
$projects_link = 'index.php#projects';
$contact_link = 'index.php#contact';
$guestbook_link = 'guestbook.php';

//Error reporting for testing purposes
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Add page specific javascript
$jsscript = "<script src=\"js/form.js\"></script>";

//Add header
include('includes/header.html');
//Add functions
require('includes/functions.php');
?>

<!-- ###############  HEADER  ############### -->

<div class="jumbotron jumbotron-fluid guestbook_form mb-0 ">
    <div class="container">
        <h1 class="display-4 text-center">Please Sign My Guestbook</h1>
        <p class="lead text-center">Leave your information or feedback
            to let me know you stopped by or what you think!</p>
    </div>
    <!--  ANCHOR  -->
    <a id="form-anchor"></a>
</div>

<!-- ###############  FORM  ############### -->

<div class="container pb-5 pt-5">
    <form id="guestbook" method="post" action="validate.php">
        <!--    CONTACT INFO    -->
        <fieldset class="form-group border p-3">
            <legend class="text-center">Contact Information</legend>
            <div class="form-row">
                <!--    FIRST NAME    -->
                <div class="form-group col-md-6">
                    <label for="fname">First:</label>
                    <input class="form-control" type="text" id="fname" name="fname">
                    <span class="text-danger d-none" id="errFname">Please enter your first name</span>
                </div>
                <!--    LAST NAME    -->
                <div class="form-group col-md-6">
                    <label for="lname">Last:</label>
                    <input class="form-control" type="text" id="lname" name="lname">
                    <span class="text-danger d-none" id="errLname">Please enter your last name</span>
                </div>
            </div>
            <div class="form-row">
                <!--    JOB TITLE    -->
                <div class="form-group col-md-6">
                    <label for="title">Job Title:</label>
                    <input class="form-control" type="text" id="title" name="title">
                </div>
                <!--    COMPANY NAME    -->
                <div class="form-group col-md-6">
                    <label for="cname">Company Name:</label>
                    <input class="form-control" type="text" id="cname" name="cname">
                </div>
            </div>
            <div class="form-row">
                <!--    EMAIL    -->
                <div class="form-group col-md-6">
                    <label for="email">Email:</label>
                    <input class="form-control" type="text" id="email" name="email">
                    <span class="text-danger d-none" id="errEmail">Please enter a valid email address</span>
                </div>
                <!--    LINKEDIN    -->
                <div class="form-group col-md-6">
                    <label for="linkedin">LinkedIn Profile:</label>
                    <input class="form-control" type="text" id="linkedin" name="linkedin">
                    <span class="text-danger d-none" id="errLinkedin">Please enter a valid LinkedIn URL</span>
                </div>
            </div>
        </fieldset>
        <!--    HOW WE MET    -->
        <fieldset class="form-group border p-3">
            <legend class="text-center">How We Met</legend>
            <div class="form-group">
                <!--    HOW WE MET SELECTION    -->
                <label for="howmet">How did we meet?:</label>
                <div>
                    <select class="custom-select" id="howmet" name="howmet[]">
                        <option value="empty">Choose...</option>
                        <option value="Meetup">Meetup</option>
                        <option value="Job Fair">Job Fair</option>
                        <option value="Interview">Interview</option>
                        <option value="Other">Other</option>
                        <option value="not met">We haven't met yet</option>
                    </select>
                    <span class="text-danger d-none" id="errHowmet">Please select how we met</span>
                </div>
                <!--    OTHER TEXT AREA    -->
                <div>
                    <label class="otherText d-none" for="other-text" id="other-text-label">Other:</label>
                    <textarea class="form-control otherText d-none" rows="2" placeholder="Please specify..." id="other-text" name="other-text"></textarea>
                    <span class="text-danger d-none" id="errOther">Please explain how we met</span>
                </div>
                <!--    MESSAGE TEXT AREA    -->
                <label for="message-text">Leave a message:</label>
                <textarea class="form-control" rows="4" placeholder="Please specify..." id="message-text" name="message-text"></textarea>
            </div>
        </fieldset>
        <!--    MAILING LIST    -->
        <fieldset class="form-group border p-3">
            <legend class="text-center">Mailing List</legend>
            <div class="form-row justify-content-center">
                <!--    ADD TO MAILING LIST CHECKBOX    -->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="mailing-check" name="mailinglist">
                        <label class="form-check-label  pb-3" for="mailing-check">Please add me to your mailing list!</label>
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <!--    SELECT EMAIL FORMAT    -->
                <div class="form-group text-center d-none" id="emailFormatDiv">
                    <label>Please choose an email format:</label>
                    <div class="form-check">
                        <div class="form-check form-check-inline">
                            <label class="form-check-label " for="email-html">HTML</label>
                            <input class="form-check-input" type="radio" name="email-format" id="email-html" value="html">
                        </div>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label" for="email-text">Text</label>
                            <input class="form-check-input" type="radio" name="email-format" id="email-text" value="text">
                        </div>
                    </div>
                    <span class="text-danger d-none" id="errFormat">Please select a format</span>
                </div>
            </div>
            <div class="form-row justify-content-center">
                <!--    SUBMIT FORM BUTTON    -->
                <button type="submit" class="btn btn-primary align-self-center" id="submitButton">Submit Form</button>
            </div>
        </fieldset>
    </form>
</div>
<?php
//Add footer
include('includes/footer.html'); ?>