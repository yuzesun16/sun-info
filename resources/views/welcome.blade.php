<!DOCTYPE html>
<html>
<title>Yuze Sun</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
      crossorigin="anonymous">
<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">

<style>
    body, html {
        height: 100%;
        font-family: "Inconsolata", sans-serif;
    }

    p2 {
        font-family: 'Actor';font-size: 20px;

    }

    skills {
        -webkit-column-count: 2; /* Chrome, Safari, Opera */
        -moz-column-count: 2; /* Firefox */
        column-count: 2;
    }

    .bgimg {
        background-position: center;
        background-size: 100%;
        background-repeat: no-repeat;
        background-image: url({{ URL::asset('images/web_design.png') }});
        min-height: 65%;
        margin-top:52px;
    }
    .menu {
        display: none;
    }

    #content {
        overflow:auto;
        width: 600px;
        margin: 2em auto;
    }

    #left, #right {
        width: 40%;
        margin:5px;
        padding: 1em;
    }

    #left {
        float:left;
    }
    #right {
        float:right;
    }
</style>

<body>



<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s2">
            <a href="#" class="w3-button w3-block w3-black">HOME</a>
        </div>
        <div class="w3-col s2">
            <a href="#about" class="w3-button w3-block w3-black">ABOUT</a>
        </div>
        <div class="w3-col s2">
            <a href="#skill" class="w3-button w3-block w3-black">SKILLS</a>
        </div>
        <div class="w3-col s2">
            <a href="#experience" class="w3-button w3-block w3-black">EXPERIENCE</a>
        </div>
        <div class="w3-col s2">
            <a href="#education" class="w3-button w3-block w3-black">EDUCATION</a>
        </div>
        <div class="w3-col s2">
            <a href="#contact" class="w3-button w3-block w3-black">CONTACT</a>
        </div>
    </div>
</div>



<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    {{--<div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">--}}
        {{--<span class="w3-tag">Open from 6am to 5pm</span>--}}
    {{--</div>--}}
    <div class="w3-display-bottomright w3-text-white animated fadeInDown w3-hide-small" style="padding:110px 180px">
        <p2>Yuze Sun | Web Developer</p2>
    </div>
    <div class="w3-display-bottomright w3-text-white animated fadeInDown w3-hide-small" style="padding:50px 180px">
        <p2>A Professional Developer is Ready to Serve </p2>
    </div>
    {{--<div class="w3-display-bottomright w3-center w3-padding-large">--}}
        {{--<span class="w3-text-white" style="font-size: 20px">A deligated Web developer seeking for the greatest good</span>--}}
    {{--</div>--}}
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">

    <!-- About Container -->
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT ME</span></h5>
            <p>After two years study in <strong>Master of Management Information Systems</strong>. I am fulfilled with
                Modern IT Knowledge and Technique. Such as <strong>Software Application Development Cycle, Cloud-Computing,
                    Security Assurance, Database design and analysis, Web Application Development, and Agile Management</strong>, etc. I
                    am looking forward to have a deeper experience to discover the beauty of them
                    continually. Seeking for a Full-time or Intern job related to web development, data analysis, big data or
                    software development with both challenges and opportunities.</p>
            <p>In addition, I have involved with many accounting concepts and international business strategies during
                my intern year. I have a very strong sense from business aspects, and great communication skills. I am
                willing to apply my technical knowledges to accomplish the goals for businesses. </p>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>"Never doubt that a small group of thoughtful, committed, citizens can change the world. Indeed, it is the only thing that ever has.</i></p>
                <p>Margaret Mead</p>
            </div>
        </div>
    </div>

    <!-- Skill Container -->
    <div class="w3-container" id="skill">
        <div class="w3-content" style="max-width:700px">

            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">SKILLS</span></h5>

            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openMenu(event, 'Web');" id="myLink">
                    <div class="w3-col s6 tablink">Web Application</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'Database');">
                    <div class="w3-col s6 tablink">Data Analysis</div>
                </a>
            </div>

            <div id="Web" class="w3-container menu w3-card">
                <div id="content">
                    <div id="left">
                        <h4>PHP</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Laravel MVC Framework</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>HTML5 & CSS3</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>JavaScript & JQuery</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>BootStrap</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Python</h4>
                        <p class="w3-text-grey">1 Years Experience</p>
                    </div>

                    <div id="right">
                        <h4>Selenium</h4>
                        <p class="w3-text-grey">1 Year Experience</p><br>

                        <h4>Git</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Agile Management</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Mockups</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Apache</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Heroku</h4>
                        <p class="w3-text-grey">2 Years Experience</p>
                    </div>
                </div>
            </div>

            <div id="Database" class="w3-container menu w3-card">
                <div id="content">
                    <div id="left">
                        <h4>MySQL</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>PostgresSQL</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>clearDB</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Data Analysis</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>
                    </div>

                    <div id="right">
                        <h4>NoSQL</h4>
                        <p class="w3-text-grey">1 Year Experience</p><br>

                        <h4>Database Design</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>Microsoft Visual Studio</h4>
                        <p class="w3-text-grey">2 Years Experience</p><br>

                        <h4>R</h4>
                        <p class="w3-text-grey">1 Years Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="w3-container" id="experience">
        <div class="w3-content" style="max-width:1800px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">EXPERIENCE</span></h5>

            <table id="myTable1" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Organization</th>
                    <th>Position</th>
                    <th>Duties and Responsibilities</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>Organization</th>
                    <th>Position</th>
                    <th>Duties and Responsibilities</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>TAGG</td>
                    <td>Dev Lead and Developer</td>
                    <td>Support a Non-Profit Company built a Donation Request <strong>Website Application</strong> (A RESTful API) using
                        <strong>Laravel MVC Framework</strong>.<br> The project was completed using <strong>Agile Management</strong> Strategy. The Web Application
                        is hosted on <strong>Heroku</strong>, a <strong>cloud-based</strong> service<br> known as PaaS using <strong>Apache</strong> engine.<br>
                        • Participated Stand up meetings.<br>
                        • Communicated with the client regarding the project requirements.<br>
                        • Used Point Poker and Yodiz to assign tasks to the dev team and report status.<br>
                        • Used Slack to constantly communicate with team members regarding the status of the project.<br>
                        • Created database using PostgreSQL and clearDB, and add config to Heroku Server.<br>
                        • Wrote PHP code for back-end functionalities following Done-Done principle.<br>
                        • Wrote JavaScript to support dynamic website pages.<br>
                        • Used Selenium tool to do application testing.<br>
                        • Wrote Comments in descriptive blocks for each function.<br>
                    </td>
                    <td>July, 2017</td>
                    <td>December, 2017</td>
                </tr>
                <tr>
                    <td>JZW International Development, LLC.</td>
                    <td>Project Manager</td>
                    <td>• Created a <strong>Web Application</strong> allows customers to track orders. Moreover, users can do some
                        <strong>data analysis</strong> by using <strong>MySQL <br>workbench</strong>. The website majorly used PHP and some JavaScript; Also
                        applied Laravel MVC framework, and it is designed by <br>using MySQL database with ClearDB.<br>
                        • Enhanced the workflow for a traditional paper-based company by applying <strong>Microsoft Visual
                            Studio</strong> Software to draw Workflow Process from Order Purchases to Summary Profit & Lost Report.
                        Using Management skills to organize duplicated works and save <br>files electronically.<br>
                        • Increased consistency and functionality for the company’s <strong>operation</strong> and <strong>accounting</strong> by using
                        the standard terms and <br>definitions for day to day operations. Reorganized the categories for
                        accounting terms for clear Income statement and balance<br> sheet; Use a consistent subject title for
                        Emails and consistent message for the regular payment notice emails, etc.<br> Therefore, we can
                        retrieve information easily than search through the entire inbox.

                    </td>
                    <td>January, 2017</td>
                    <td>December, 2017</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="w3-container" id="education">
        <div class="w3-content" style="max-width:1800px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">EDUCATION</span></h5>

            <table id="myTable2" class="table table-striped table-bordered" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>University</th>
                    <th>Major</th>
                    <th>Degree</th>
                    <th>GPA</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>University</th>
                    <th>Major</th>
                    <th>Degree</th>
                    <th>GPA</th>
                    <th>From Date</th>
                    <th>To Date</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>University of Nebraska at Omaha</td>
                    <td>Management Information Systems</td>
                    <td>Master's of Science</td>
                    <td>3.73</td>
                    <td>August, 2015</td>
                    <td>December, 2017</td>
                </tr>
                <tr>
                    <td>University of Nebraska at Omaha</td>
                    <td>Finance, Banking and Investments</td>
                    <td>Bachelor's of Science</td>
                    <td>3.69</td>
                    <td>January, 2011</td>
                    <td>May, 2014</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Contact/Area Container -->

    <div class="w3-container" id="contact">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">CONTACT ME</span></h5>
            <div class="w3-center">
                <p>Yuze Sun</p>
                <p>610 S. 180th Ave, Elkhorn, NE 68022</p>
                <p>402-630-8515</p>
                <p><a href="mailto:yuzesun16@gmail.com">yuzesun16@gmail.com</a></p>
                <p><span class="w3-tag">FYI!</span> I am willing to relocate.</p>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
<footer class="w3-center w3-dark-grey w3-large" style="padding: 10px;">
    <p>Copy right @ Yuze Sun 2018</p>
</footer>

<!-- Add Google Maps -->

<script src="//code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>

<script>

    // Tabbed skills
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();

</script>

<script>
    $(document).ready(function() {
        $('#myTable1').DataTable();
        $('#myTable2').DataTable();
    } );
</script>

<script type="text/javascript" charset="utf8" src="http:////code.jquery.com/jquery-1.12.4.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
