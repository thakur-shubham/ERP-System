<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if(isset($_POST['FacultyLogout'])) {
    $SESSION_START = session_start();
    $SESSION_DESTROY = session_destroy();
    // unset($_POST['FacultyId']);
    if ($SESSION_DESTROY) {
        echo "<script>window.location.href='FacultyLogin.php';</script>";
        // header('location;FacultyLogin.php');
    }
}
?>
