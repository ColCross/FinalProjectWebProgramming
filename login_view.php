<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>

<form action="./login_control.php" method="post">

    <!--User name input field-->
    <label for="input_usr_name">User name:</label>
    <input id="input_usr_name" type="text" name="usr_name" value="User"><br>

    <!--Password input field-->
    <label for="input_password">Password:</label>
    <input id="input_password" type="text" name="password" value="Pass"><br>

    <!--Submit button-->
    <br>
    <input type="submit" value="Submit">

    <!--Link to the registration page-->
    <a href="register_view.php">Register</a>
</form>

</body>
</html>