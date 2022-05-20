<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if (isset($_POST['FacultySignUpButton'])) {
    $SIGNUP = $_POST['FacultySignUpId'];
    $PASSWORD = $_POST['FacultySignUpPassword'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "INSERT into facultysignupdetails VALUES ('', '$SIGNUP', '$PASSWORD')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Sign Up is done Successfully!');
            window.location.href='FacultyLogin.php';</script>";
        } else {
            echo "<script>alert('Failed to Sign Up!');
            window.location.href='FacultySignUp.php';</script>";
        }
    }
}
?>
