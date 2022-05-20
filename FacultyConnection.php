<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if (isset($_POST['FacultyLoginButton'])) {
    $USERID = $_POST['UserId'];
    $PASSWORD = $_POST['Password'];

    $conn = mysqli_connect($host, $user, $password, $name);
    if ($conn) {
        $sql = "select * from facultysignupdetails";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows ($result)>0) {
            while ($data=mysqli_fetch_assoc($result)) {
                if ($data['FacultyId'] == $USERID AND $data['FacultyPassword'] == $PASSWORD) {
                    header("location:FacultyHome.php");
                } else {
                    echo "<script>alert('Wrong User Id and Password.');
                    window.location.href='FacultyLogin.php';</script>";
                }
            }
        }
    }
}
