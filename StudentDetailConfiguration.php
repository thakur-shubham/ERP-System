<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if (isset($_POST['StudentDetailFormButton'])) {
    $NAME = $_POST['StudentName'];
    $EMAIL = $_POST['StudentEmail'];
    $CONTACT = $_POST['StudentContact'];
    $ID = $_POST['StudentId'];
    $ROLLNO = $_POST['StudentRoll'];
    $TODAYSDATE = $_POST['TodaysDate'];
    $DOB = $_POST['StudentDOB'];
    $GENDER = $_POST['StudentGender'];
    $FATHER = $_POST['FatherName'];
    $FATHERCONTACT = $_POST['FatherContact'];
    $FATHEROCCUPATION = $_POST['FatherOccupation'];
    $MOTHER = $_POST['MotherName'];
    $MOTHERCONTACT = $_POST['MotherContact'];
    $MOTHEROCCUPATION = $_POST['MotherOccupation'];
    $BLOODGROUP = $_POST['StudentBlood'];
    $COURSETYPE = $_POST['CourseType'];
    $COURSE = $_POST['Course'];
    $BRANCH = $_POST['Branch'];
    $SEMESTERYEAR = $_POST['SemesterYear'];
    $HOSTEL = $_POST['Hostel'];
    $ROOM = $_POST['Room'];
    $ADDRESS = $_POST['Address'];
    $MENTOR = $_POST['Mentor'];
    $MENTORCONTACT = $_POST['MentorContact'];
    $MENTOREMAIL = $_POST['MentorEmail'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "INSERT into studentdetails VALUES ('', '$NAME', '$EMAIL', '$CONTACT', '$ID', '$ROLLNO', '$TODAYSDATE', '$DOB', '$GENDER', '$FATHER',
                                                    '$FATHERCONTACT', '$FATHEROCCUPATION', '$MOTHER', '$MOTHERCONTACT', '$MOTHEROCCUPATION',
                                                    '$BLOODGROUP', '$COURSETYPE', '$COURSE', '$BRANCH', '$SEMESTERYEAR', '$HOSTEL', '$ROOM', '$ADDRESS',
                                                    '$MENTOR', '$MENTORCONTACT', '$MENTOREMAIL')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Data Uploaded!');
            window.location.href='StudentDetailForm.php';</script>";
        } else {
            echo "<script>alert('Failed to upload your data!');
            window.location.href='StudentDetailForm.php';</script>";
        }
    }
}
?>
