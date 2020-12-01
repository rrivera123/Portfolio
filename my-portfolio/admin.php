<?php
//Check if user is logged in
require('includes/checklogin.php');

//Set page specific title and links
$page_title = "Admin";
$index_link = 'index.php';
$about_link = 'index.php#about';
$resume_link = 'index.php#resume';
$projects_link = 'index.php#projects';
$contact_link = 'index.php#contact';
$guestbook_link = 'guestbook.php';

//Add page specific javascript
$jsscript = "";

//Add header
include('includes/header.html');
//Add server credentials
require('/home/rriverag/dbcreds.php');
?>

<!-- ###############  HEADER  ############### -->

    <div class="text-center guestbook_form p-5">
        <div class="container">
            <h1 class="">Admin Portal</h1>
        </div>
    </div>
<div class="container pt-5 pb-5">

<!-- ###############  TABLE  ############### -->

    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Guestbook Entries</a>
        </li>
        <!--    FOR FUTURE TABS    -->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>-->
<!--        </li>-->
<!--        <li class="nav-item">-->
<!--            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>-->
<!--        </li>-->
    </ul>
    <!--    GUEST TABLE TAB CONTENT   -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <table id="guestbook-table" class="display">
                <thead>
                <tr>
                    <td>Guest_ID</td>
                    <td>Full_Name</td>
                    <td>Job_Title</td>
                    <td>Company_Name</td>
                    <td>Email</td>
                    <td>LinkedIn</td>
                    <td>How_We_Met</td>
                    <td>How_We_Met_Text</td>
                    <td>Message_Text</td>
                    <td>Mailing_List</td>
                    <td>Email_Format</td>
                    <td>Timestamp</td>
                </tr>
                </thead>
                <tbody>
                <?php

                //Create a query
                $sql = "SELECT * FROM guestbook";
                //Query the server for info, store array in variable
                $result = mysqli_query($cnxn, $sql);

                //loop over arrays within the array as rows, set info to variables, print results
                foreach($result as $row){
                    $order_id = $row['contact_id'];
                    $fullname = $row['firstName']." ".$row['lastName'];
                    $title = $row['title'];
                    $company = $row['company'];
                    $email = $row['email'];
                    $linkedIn = $row['linkedIn'];
                    $howWeMet = $row['howWeMet'];
                    $otherText = $row['otherText'];
                    $messageText = $row['messageText'];
                    $mailingList = $row['mailingList'];
                    $emailFormat = $row['emailFormat'];
                    $timestamp = date( "M d, Y g:i a", strtotime($row['timestamp']));

                    echo "<tr>";
                    echo "<td>$order_id</td>";
                    echo "<td>$fullname</td>";
                    echo "<td>$title</td>";
                    echo "<td>$company</td>";
                    echo "<td>$email</td>";
                    echo "<td>$linkedIn</td>";
                    echo "<td>$howWeMet</td>";
                    echo "<td>$otherText</td>";
                    echo "<td>$messageText</td>";
                    echo "<td>$mailingList</td>";
                    echo "<td>$emailFormat</td>";
                    echo "<td>$timestamp</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
        <!--    ADDITIONAL TABLE TABS FOR FUTURE FEATURES    -->
<!--        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>-->
<!--        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>-->
    </div>
    <div class="text-center p-5">
        <!--    LOGOUT BUTTON    -->
        <a type="submit" href="logout.php" class="btn btn-primary btn-lg" role="button">Logout</a>
    </div>
</div>
<?php
//Add footer
include('includes/footer.html'); ?>