<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="StudentHome.css">
        <script src="StudentHome.js"></script>
        <title>Home</title>
    </head>
    <body>
        <div class="header">
            <div class="progress-container">
                <div class="progress-bar" id="myBar"></div>
            </div>
        </div>
        <form id="navigation">
            <h1 class="name"><a class="span">GRD I</a>nstitute of <a class="span">M</a>anagement & <a class="span">T</a>echnology</h1>
            <div class="nav-list">
                <div class="btns">
                    <a href="#homepage" data-after="Home"><button class="btn">HOME</button></a>
                    <a href="#attendancepage" data-after="Attendance"><button class="btn">ATTENDANCE</button></a>
                    <a href="#contactpage" data-after="Contact"><button class="btn">CONTACT</button></a>
                    <form method="session" action="StudentLogout.php"><a><button name="StudentLogout" class="btn">LOG OUT</button></a></form>
                </div>
            </div>
        </form>
        <section id="homepage">
            <div class="hello">
                <h1>Welcome</h1>
                <h1>Shubham Singh</h1>
                <h1>Bachelor Of Technology,</h1>
                <h1>Computer Science and Engineering</h1>
                <p>BCS101180003 / 180490101033</p>

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
                <div class="studentdashboard">
                    <div class="dashboardprofile">
                        <div class="profile">
                            <h5>Shubham Singh</h5>
                            <h5>+91 7084812097</h5>
                            <h5>vibesofthakur@gmail.com</h5>
                            <!-- <h5><?php echo $_POST['SName'] ?></h5>
                            <h5><?php echo $_POST['SContact'] ?></h5>
                            <h5><?php echo $_POST['SEmail'] ?></h5> -->
                        </div>
                        <table class="profiletable">
                            <tr>
                                <td>Registration Date:</td>
                                <td>14-04-2022</td>
                                <!-- <td><?php echo $_POST['TDate'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Student Id:</td>
                                <td>BCS101180003</td>
                                <!-- <td><?php echo $_POST['SId'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Roll No.:</td>
                                <td>180490101033</td>
                                <!-- <td><?php echo $_POST['SRoll'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Father Name:</td>
                                <td>Satish Singh</td>
                                <!-- <td><?php echo $_POST['SFather'] ?></td> -->
                            </tr>
                            <tr>
                                <td>Mother Name:</td>
                                <td>Sudha Singh</td>
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
                                    <tr>
                                        <td>Semester/Year:</td>
                                        <td>8/4</td>
                                        <!-- <td><?php echo $_POST['SSemesterYear'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Hostel:</td>
                                        <td>214-Boys Hostel</td>
                                        <!-- <td><?php echo $_POST['SHostel'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Room No.:</td>
                                        <td>26</td>
                                        <!-- <td><?php echo $_POST['SRoom'] ?></td> -->
                                    </tr>
                                </table>
                            </div>
                            <h2>Fees Details</h2>
                            <div class="feesinfo">
                                <table class="feestable">
                                    <tr>
                                        <td>Total Fees:</td>
                                        <td>2,05,000</td>
                                    </tr>
                                    <tr>
                                        <td>Amount Paid:</td>
                                        <td>2,05,000</td>
                                    </tr>
                                    <tr>
                                        <td>Remaining Amount:</td>
                                        <td>0</td>
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
                                        <td>Production Manager</td>
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
                                        <td>Varanasi, Uttar Pradesh, India</td>
                                        <!-- <td><?php echo $_POST['SAddress'] ?></td> -->
                                    </tr>
                                </table>
                            </div>
                            <h2>Mentor Details</h2>
                            <div class="mentorinfo">
                                <table class="mentortable">
                                    <tr>
                                        <td>Mentor:</td>
                                        <td>Girish Singh</td>
                                        <!-- <td><?php echo $_POST['SMentor'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Mentor's Contact No.:</td>
                                        <td>+91 7782087878</td>
                                        <!-- <td><?php echo $_POST['SMentorContact'] ?></td> -->
                                    </tr>
                                    <tr>
                                        <td>Mentor's Email:</td>
                                        <td>girish@gmail.com</td>
                                        <!-- <td><?php echo $_POST['SMentorEmail'] ?></td> -->
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <img class="dotted-shape" src="dotted-shape.png"> -->
        </section>
        <section id="attendancepage">
            <h1><a class="span">A</a>ttendance</h1>
            <div class="attendance">
                <div class="card">
                    <div class="box">
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>80<a id="span">%</a></h2>
                            </div>
                        </div>
                        <h2 class="text">AI</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>65<a id="span">%</a></h2>
                            </div>
                        </div>
                        <h2 class="text">Cryptography</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>20<a id="span">%</a></h2>
                            </div>
                        </div>
                        <h2 class="text">Cloud</h2>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <div class="percent">
                            <svg>
                                <circle cx="70" cy="70" r="70"></circle>
                                <circle cx="70" cy="70" r="70"></circle>
                            </svg>
                            <div class="number">
                                <h2>75<a id="span">%</a></h2>
                            </div>
                        </div>
                        <h2 class="text">OS</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="contactpage">
            <h1><a class="span">C</a>ontact</h1>
            <div class="contact">
                <div class="home">
                    <a class="contact-box"><i class="fa fa-home"></i></a>
                    <div class="home-box">
                        <h3>Address</h3>
                        <p>Mahamanapuri Colony, Varanasi,</br>Uttar Pradesh, India.</br>(221005)</p>
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
                        <p>vibesofthakur@gmail.com</p>
                        <!-- <p><?php echo $_POST['SEmail'] ?></p> -->
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>
