<?php
$host = "localhost";
$user = "root";
$password = '';
$name = "finalyearproject";

if(isset($_GET['StudentLogout'])) {
    $SESSION_START = session_start();
    $SESSION_DESTROY = session_destroy();
    unset($_SESSION['StudentId']);
    if ($SESSION_DESTROY) {
        echo "<script>alert('Are you sure, you want to Log Out?');
        window.location.href='StudentLogin.php';</script>";
    }
}
?>
