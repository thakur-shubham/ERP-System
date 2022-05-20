<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="StudentLogin.css">
        <title>Student Login</title>
    </head>
    <body>
        <form method="post" class="form" action="StudentConnection.php">
            <table class="table">
                <h1 class="h1">LOG IN</h1>
                <tr>
                    <th class="name">Student ID</th>
                    <td><input type="text" name="UserId" placeholder="Student ID" class="input" required  autocomplete="off"></td>
                </tr>
                <tr>
                    <th class="name">Password</th>
                    <td><input type="password" name="Password" placeholder="Password" class="input" required autocomplete="off"></td>
                </tr>
                <div class="tablebutton">
                    <tr>
                        <td><button type="submit" class="btn" name="StudentLoginButton">Log In</button></td>
                    </tr>
                </div>
            </table>
            <div class="Forget">
                <a class="IDP" type="button" href="StudentSignUp.php">Sign Up</a>
                <a class="IDP" href="#">Forgot ID?</a>
                <a class="IDP" href="#">Forgot Password?</a>
            </div>
        </form>
    </body>
</html>
