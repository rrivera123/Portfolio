<?php
//Set page specific navbar title, links, and optional script
$page_title = "Ryan's Portfolio";
$index_link = '#';
$about_link = '#about';
$resume_link = '#resume';
$projects_link = '#projects';
$contact_link = '#contact';
$guestbook_link = 'guestbook.php';

//Error reporting for testing purposes
//ini_set('display_errors', 1);
//error_reporting(E_ALL);

//Add page specific javascript
$jsscript = "";

//Add header
include('includes/header.html')
?>

<!-- ###############  ABOUT  ############### -->

<section class="about-section"  id="about">
    <div class="container pb-5 pt-5">
        <div class="card mb-3 mx-auto border-0">
            <div class="row no-gutters">
                <!--PROFILE PIC-->
                <div class="col-md-4 text-center">
                    <img src="images/profile-pic.jpg" class="card-img profile-image" alt="picture of the page owner">
                </div>
                <!--SUMMARY-->
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hello! I'm Ryan, a Software Development student.</h5>
                        <p class="mx-3 pl-lg-5 pt-3">
                            I have been fascinated with understanding and writing code ever since my very first
                            experiences learning Microsoft Visual Basic in high school. I was blown away that I
                            could create something new like my own websites, video games, or any other software
                            I dreamt of, using only my creativity and ingenuity. However, rather than follow my
                            heart towards a programming career, my path brought me to the military, where I led
                            a successful career as an Air Force jet engine mechanic. When my time with the military
                            was ending, I found myself with an opportunity. I could either play it safe and continue
                            my trade in the civilian sector or take a huge risk and change careers to follow my
                            dream. I took the leap of faith, enrolled in school, and never looked back.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ###############  RESUME  ############### -->

<section class="resume-section" id="resume">
    <div class="container pb-5 pt-5 pl-lg-5">
        <!--EDUCATION SECTION-->
        <h3>Education</h3>
        <p><strong>Bachelor of Applied Science in Information Technology: Software Development</strong><br>
            Green River College, Auburn, WA <i>Aug 2020-Present</i></p>
        <ul>
            <li class="">Object-Oriented Programming</li>
            <li class="">Data Structures</li>
            <li class="">Systems Programming</li>
            <li class="">Full Stack Web Development</li>
            <li class="">Algorithms</li>
            <li class="">Agile Development Methods</li>
            <li class="">Database Fundamentals</li>
        </ul>
        <p><strong>Associate of Applied Science in Information Technology: Systems and Security</strong><br>
            Green River College, Auburn, WA  <i>Jan 2019-Aug 2020</i></p>
        <ul>
            <li>Programming Fundamentals</li>
            <li>Front-End Web Development</li>
            <li>Web Programming</li>
            <li>Elementary Data Structures</li>
            <li>Database Constructs</li>
        </ul>
        <!--SKILLS SECTION-->
        <h3>Skills</h3>
        <ul>
            <li>Languages: Python, Java, JavaScript, PHP, SQL</li>
            <li>Web: HTML, CSS, jQuery, JSON, Bootstrap</li>
            <li>Tools: Git, IntelliJ, PHPStorm, WebStorm</li>
            <li>Agile: Pair Programming, Sprints</li>
        </ul>
        <!--EXPERIENCE SECTION-->
        <h3>Experience</h3>
        <p><strong>Full-Stack Web Developer (Part-time Volunteer)</strong><br>Kent United Methodist Church  <i>Aug 2020 - Present</i></p>
        <ul>
            <li>Built web app to enhance user experience, handle daily service requests, and reduce processing demands</li>
            <li>Worked in Agile team using Scrum methodologies to maintain good development process and workflow</li>
            <li>Delivered Full-Stack web solution with clean interfaces and simple, intuitive interactions and experiences</li>
        </ul>
        <p><strong>Jet Engine Maintenance Shift Supervisor</strong><br>United States Air Force <i>Apr 2014 - Dec 2018</i></p>
        <ul>
            <li>Directed 17 Total Force propulsion technicians and resources for 32 F110-100 engines valued at $1.06B</li>
            <li>Analyzed and interpreted engine trend data, advised repairs actions, devised maintenance work scopes</li>
            <li>Supervised 3 maintenance teams through 16 engine rebuilds generating 36K flight hours for pilot training</li>
        </ul>
        <p><strong>Jet Engine Maintenance Technician</strong><br>United States Air Force <i>Sep 2009 - Apr 2014</i></p>
        <ul>
            <li>Removed, installed, aligned, inspected, and repaired jet engine modules and subsystem components</li>
            <li>Maintained 18 deployed F16 aircraft completing 84 emergency repairs enabling 1.4K combat missions</li>
            <li>Chaired asset repair program, coordinating the refit of 460 engine parts saving $6M in replacements costs</li>
        </ul>
    </div>
</section>

<!-- ###############  PROJECTS  ############### -->

<section class="project-section" id="projects">
    <div class="container pb-5">
        <h3 class="projects-heading pt-5 pb-5 text-center">Here are some of my projects</h3>
        <div class="card-deck pb-3">
            <!--    ROW ONE    -->
            <div class="card border-0">
                <a href="http://dar2.greenriverdev.com/">
                    <img src="images/kent-proj.PNG" class="card-img-top" alt="screenshot of Kent Outreach web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Kent Outreach Program</h5>
                </div>
            </div>

            <div class="card border-0">
                <a href="https://rrivera.greenriverdev.com/305/projects/proj_cinemapenguin/cp_royal.html">
                    <img src="images/cinema-proj.PNG" class="card-img-top" alt="screenshot of Cinema Penguin web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Cinema Penguin</h5>
                </div>
            </div>

            <div class="card border-0">
                <a href="https://rrivera.greenriverdev.com/305/projects/proj_treeandbook/tb_komatsu.html">
                    <img src="images/treeandbook-proj.PNG" class="card-img-top" alt="screenshot of Tree and Book web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Tree and Book</h5>
                </div>
            </div>
        </div>
        <!--    ROW TWO    -->
        <div class="card-deck pt-3 pb-3">
            <div class="card border-0">
                <a href="https://rrivera.greenriverdev.com/305/projects/proj_pandasiachocolate/pc_home.html">
                    <img src="images/pandasia-proj.PNG" class="card-img-top" alt="screenshot of Pandasia Chocolates web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Pandasia Chocolates</h5>
                </div>
            </div>
            <div class="card border-0">
                <a href="https://rrivera.greenriverdev.com/305/projects/proj_redballpizza/rb_survey.html">
                    <img src="images/redball-proj.PNG" class="card-img-top" alt="screenshot of Redball Pizza web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">Redball Pizza</h5>
                </div>
            </div>
            <div class="card border-0">
                <a href="https://rrivera.greenriverdev.com/305/projects/proj_dlrradio/dlr_evenings.html">
                    <img src="images/dlr-proj.PNG" class="card-img-top" alt="screenshot of DLR Radio web page project">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">DLR Radio</h5>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
//Add footer
include('includes/footer.html')
?>