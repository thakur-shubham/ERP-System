<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <link rel="stylesheet" href="FacultySignUp.css">
        <title>Faculty SignUp</title>
    </head>
    <body>
        <form method="post" class="form" action="FacultySignupConfig.php">
            <table class="table">
                <h1 class="h1">SIGN UP</h1>
                <tr>
                    <th class="name">User ID</th>
                    <td><input type="text" name="FacultySignUpId" placeholder="Faculty ID" class="input" required  autocomplete="off"></td>
                </tr>
                <tr>
                    <th class="name">Password</th>
                    <td><input type="password" name="FacultySignUpPassword" placeholder="Password" class="input" required autocomplete="off"></td>
                </tr>
                <div class="tablebutton">
                    <tr>
                        <td><button type="submit" class="btn" name="FacultySignUpButton">SignUp</button></td>
                    </tr>
                </div>
            </table>
        </form>
    </body>
</html>
