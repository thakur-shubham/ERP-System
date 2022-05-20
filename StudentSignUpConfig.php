<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if (isset($_POST['StudentSignUpButton'])) {
    $SIGNUP = $_POST['StudentSignUpId'];
    $PASSWORD = $_POST['StudentSignUpPassword'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "INSERT into studentsignupdetails VALUES ('', '$SIGNUP', '$PASSWORD')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>alert('Sign Up is done Successfully!');
            window.location.href='StudentLogin.php';</script>";
        } else {
            echo "<script>alert('Failed to Sign Up!');
            window.location.href='StudentSignUp.php';</script>";
        }
    }
}
?>
