<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="StudentDetailForm.css">
        <script src="StudentDetailForm.js"></script>
        <title>Student Details Form</title>
    </head>
    <body>
        <section>
            <form action="StudentDetailConfiguration.php" class="form" method="POST">
                <table class="table">
                    <h1 class="h1">Student Details</h1>
                    <tr>
                        <th class="name">Student Name:</th>
                        <td><input type="text" name="StudentName" placeholder="Student Name" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Student Email:</th>
                        <td><input type="email" name="StudentEmail"placeholder="Student Email" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Student Contact No.:</th>
                        <td><input type="tel" name="StudentContact" placeholder="Student Contact No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Student Id:</th>
                        <td><input type="text" name="StudentId" placeholder="Student Id" class="input" required minlength="12" maxlength="13" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Student Roll No.:</th>
                        <td><input type="number" name="StudentRoll" placeholder="Student Roll No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Date:</th>
                        <td><input type="date" name="TodaysDate" placeholder="Date" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Date Of Birth:</th>
                        <td><input type="date" name="StudentDOB" placeholder="Date Of Birth" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Gender:</th>
                        <td><input type="text" name="StudentGender" placeholder="Gender" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Father Name:</th>
                        <td><input type="text" name="FatherName" placeholder="Father Name" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Father Contact No.:</th>
                        <td><input type="text" name="FatherContact" placeholder="Father Contact No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Father Occupation:</th>
                        <td><input type="text" name="FatherOccupation" placeholder="Father Occupation" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mother Name:</th>
                        <td><input type="text" name="MotherName" placeholder="Mother Name" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mother Contact No.:</th>
                        <td><input type="text" name="MotherContact" placeholder="Mother Contact No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mother Occupation:</th>
                        <td><input type="text" name="MotherOccupation" placeholder="Mother Occupation" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Blood Group:</th>
                        <td><input type="text" name="StudentBlood" placeholder="Blood Group" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Course Type:</th>
                        <td><input type="text" name="CourseType" placeholder="Course Type" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Course:</th>
                        <td><input type="text" name="Course" placeholder="Course" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Branch:</th>
                        <td><input type="text" name="Branch" placeholder="Branch" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Semester/Year:</th>
                        <td><input type="text" name="SemesterYear" placeholder="Semester/Year" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Hostel:</th>
                        <td><input type="text" name="Hostel" placeholder="Hostel" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Room No.:</th>
                        <td><input type="text" name="Room" placeholder="Room No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Permanent Address:</th>
                        <td><input type="text" name="Address" placeholder="Permanent Address" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mentor:</th>
                        <td><input type="text" name="Mentor" placeholder="Mentor" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mentor Contact No.:</th>
                        <td><input type="text" name="MentorContact" placeholder="Mentor Contact No." class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <th class="name">Mentor Email:</th>
                        <td><input type="text" name="MentorEmail" placeholder="Mentor Email" class="input" autocomplete="off"></td>
                    </tr>
                    <tr>
                        <td><button class="btn" name="StudentDetailFormButton" onclick="alert('Are you sure you filled the correct information.')">Submit</button></td>
                    </tr>
                </table>
            </form>
        </section>
    </body>
</html>
