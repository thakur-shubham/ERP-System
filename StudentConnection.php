<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if (isset($_POST['StudentLoginButton'])) {
    $USERID = $_POST['UserId'];
    $PASSWORD = $_POST['Password'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "select * from studentsignupdetails";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows ($result)>0) {
            while ($data=mysqli_fetch_assoc($result)) {
                if ($data['StudentId'] == $USERID AND $data['StudentPassword'] == $PASSWORD) {
                    header("location:StudentHome.php");
                } else {
                    echo "<script>alert('Wrong User Id and Password.');
                    window.location.href='StudentLogin.php';</script>";
                }
            }
        }
    }
}
