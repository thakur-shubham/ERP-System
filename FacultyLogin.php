<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="FacultyLogin.css">
        <title>Faculty Login</title>
    </head>
    <body>
        <form method="post" class="form" action="FacultyConnection.php">
            <table class="table">
                <h1 class="h1">LOG IN</h1>
                <tr>
                    <th class="name">Faculty ID</th>
                    <td><input type="text" name="UserId" placeholder="Faculty ID" class="input" required  autocomplete="off"></td>
                </tr>
                <tr>
                    <th class="name">Password</th>
                    <td><input type="password" name="Password" placeholder="Password" class="input" required autocomplete="off"></td>
                </tr>
                <div class="tablebutton">
                    <tr>
                        <td><button type="submit" class="btn" name="FacultyLoginButton">Log In</button></td>
                    </tr>
                </div>
            </table>
            <div class="Forget">
                <a class="IDP" type="button" href="FacultySignUp.php">Sign Up</a>
                <a class="IDP" href="#">Forgot ID?</a>
                <a class="IDP" href="#">Forgot Password?</a>
            </div>
        </form>
    </body>
</html>
