<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="FacultyHome.css">
        <script src="FacultyHome.js"></script>
        <title>Home</title>
    </head>
    <body>
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
        <div id="navigation">
            <h1 class="name"><a class="span">GRD I</a>nstitute of <a class="span">M</a>anagement & <a class="span">T</a>echnology</h1>
            <div class="nav-list">
                <div class="btns">
                    <a href="#homepage" data-after="Home"><button class="btn">HOME</button></a>
                    <a href="#contactpage" data-after="Contact"><button class="btn">CONTACT</button></a>
                    <a href="StudentDetailForm.php"><button class="btn">Student Form</button></a>
                    <a><form method="post" action="FacultyLogout.php"><button name="FacultyLogout" class="btn">LOG OUT</button></form></a>
                </div>
            </div>
        </div>
        <section id="homepage">
            <div class="hello">
                <h1>Welcome</h1>
                <h1>Girish Singh Bisht</h1>
                <h1>Associate Professor,</h1>
                <h1>Computer Science Department</h1>
                <p>BTCSE00000</p>

                <!-- <h1>Welcome<span></span></h1>
                <h1><?php echo $NAME ?><span></span></h1>
                <h1><a class="name-span"><?php echo $_POST['SCourse'] ?></a><span></span>,</h1>
                <h1><?php echo $_POST['SBranch'] ?><span></span></h1>
                <p><?php echo $_POST['SId'] ?> / <?php echo $_POST['SRoll'] ?></p> -->
                <a href="#dashboardpage" data-after="Dashboard"><button class="dashboardbtn">DASHBOARD</button></a>
            </div>
            <!-- <img src="15.png"> -->
        </section>
        <section id="dashboardpage">
            <h1><a class="span">D</a>ashboard</h1>
            <div class="dashboard">
                <div class="facultydashboard">
                    <div class="dashboardprofile">
                        <div class="profile">
                            <h5>Girish Singh Bisht</h5>
                            <h5>+91 7084812097</h5>
                            <h5>girishsingh@gmail.com</h5>
                            <!-- <h5><?php echo $_POST['SName'] ?></h5>
                            <h5><?php echo $_POST['SContact'] ?></h5>
                            <h5><?php echo $_POST['SEmail'] ?></h5> -->
                        </div>
                        <table class="profiletable">
                            <tr>
                                <td>Joining Date:</td>
                                <td>14-04-2022</td>
                                <!-- <td><?php echo $_POST['TDate'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Faculty Id:</td>
                                <td>BCS101180003</td>
                                <!-- <td><?php echo $_POST['SId'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Father Name:</td>
                                <td>Mr. Singh</td>
                                <!-- <td><?php echo $_POST['SFather'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Mother Name:</td>
                                <td>Mrs. Singh</td>
                                <!-- <td><?php echo $_POST['SMother'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Date Of Birth:</td>
                                <td>12-09-1999</td>
                                <!-- <td><?php echo $_POST['SDOB'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Blood Group:</td>
                                <td>O +ve</td>
                                <!-- <td><?php echo $_POST['SBlood'] ?></td> -->
                            </tr>
                        </table>
                    </div>
                    <div class="dashboardprogram">
                        <div class="information">
                            <h2>Information</h2>
                            <div class="dashboardinfo">
                                <table class="informationtable">
                                    <tr>
                                        <td>Course Type:</td>
                                        <td>Under Graduate</td>
                                        <!-- <td><?php echo $_POST['SCourseType'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Course:</td>
                                        <td>Bachelor of Technology</td>
                                        <!-- <td><?php echo $_POST['SCourse'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Branch:</td>
                                        <td>Computer Science and Engineering</td>
                                        <!-- <td><?php echo $_POST['SBranch'] ?></td> -->
                                    </tr>
                                </table>
                            </div>
                            <h2>Parents Information</h2>
                            <div class="parentinfo">
                                <table class="parenttable">
                                    <tr>
                                        <td>Father's Mobile No.:</td>
                                        <td>+91 7782087878</td>
                                        <!-- <td><?php echo $_POST['SFatherMob'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Father's Occupation:</td>
                                        <td>Employee in XYZ Industry</td>
                                        <!-- <td><?php echo $_POST['SFatherOccup'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Mother's Mobile No.:</td>
                                        <td>+91 7782087878</td>
                                        <!-- <td><?php echo $_POST['SMotherMob'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Mother's Occupation:</td>
                                        <td>House Wife</td>
                                        <!-- <td><?php echo $_POST['SMotherOccup'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Permanent Address:</td>
                                        <td>Uttarakhand, India</td>
                                        <!-- <td><?php echo $_POST['SAddress'] ?></td> -->
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img class="dotted-shape" src="dotted-shape.png"> -->
        </section>
        <section id="contactpage">
            <h1><a class="span">C</a>ontact</h1>
            <div class="contact">
                <div class="home">
                    <a class="contact-box"><i class="fa fa-home"></i></a>
                    <div class="home-box">
                        <h3>Address</h3>
                        <p>Uttarakhand, India.</br>(228009)</p>
                    </div>
                </div>
                <div class="phone">
                    <a class="contact-box"><i class="fa fa-phone"></i></a>
                    <div class="phone-box">
                        <h3>Phone</h3>
                        <p>+91 7084812097</p>
                        <!-- <p><?php echo $_POST['SContact'] ?></p> -->
                    </div>
                </div>
                <div class="envelope">
                    <a class="contact-box"><i class="fa fa-envelope"></i></a>
                    <div class="envelope-box">
                        <h3>E-Mail</h3>
                        <p>girishsingh@gmail.com</p>
                        <!-- <p><?php echo $_POST['SEmail'] ?></p> -->
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
