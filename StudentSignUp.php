<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="StudentSignUp.css">
        <title>Student SignUp</title>
    </head>
    <body>
        <form method="post" class="form" action="StudentSignupConfig.php">
            <table class="table">
                <h1 class="h1">SIGN UP</h1>
                <tr>
                    <th class="name">Student ID</th>
                    <td><input type="text" name="StudentSignUpId" placeholder="Student ID" class="input" required  autocomplete="off"></td>
                </tr>
                <tr>
                    <th class="name">Password</th>
                    <td><input type="password" name="StudentSignUpPassword" placeholder="Password" class="input" required autocomplete="off"></td>
                </tr>
                <div class="tablebutton">
                    <tr>
                        <td><button type="submit" class="btn" name="StudentSignUpButton">SignUp</button></td>
                    </tr>
                </div>
            </table>
        </form>
    </body>
</html>
