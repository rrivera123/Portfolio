<?php
//Set page specific nav links
$page_title = "Admin Login";
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
$jsscript = "";

//Session start
session_start();
session_regenerate_id();

//Initialize variables
$err = false;
$username = "";
$password = "";

//If the form has been submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Get the username and password
    $username = strtolower($_POST['username']);
    $password = strtolower($_POST['password']);

    require('/home/rriverag/logincreds.php');

    //Verify password matches logincreds.php
    if($username == $adminUser && $password == $adminPass){
        //Session variable to check if user is logged in
        $_SESSION['loggedin'] = true;

        //If logged in, go to index.php, else go to login page
        if(isset($_SERVER['page'])){
            //Redirect to index page
            header("location: " . $_SESSION['page']);
        }
        else{
            header("location: admin.php");
        }
    }
    else{
        //Set error flag
        $err = true;
    }
}
//Add header
include('includes/header.html');
?>

    <!-- ###############  ADMIN LOGIN  ############### -->

    <div class="container pt-5 pb-5">
        <h1 class="text-center">Admin Login</h1>
        <!--    LOGIN FORM    -->
        <form class="p-5" action="#" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username"
                    <? echo "value='$username'" ?>>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <?php
            if($err){
                echo '<span class="err text-danger">Incorrect login credentials, please try again</span><br><br>';
            }?>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
<?php
//Add footer
include('includes/footer.html')
?>