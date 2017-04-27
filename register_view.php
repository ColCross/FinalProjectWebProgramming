<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>

<form action="./register_control.php" method="post">

    <!--First name input field-->
    <label for="input_f_name">First name:</label>
    <input id="input_f_name" type="text" name="f_name" value="First"><br>

    <!--Last name input field-->
    <label for="input_l_name">Last name:</label>
    <input id="input_l_name" type="text" name="l_name" value="Last"><br>

    <!--User name input field-->
    <label for="input_usr_name">User name:</label>
    <input id="input_usr_name" type="text" name="usr_name" value="User"><br>

    <!--Password input field-->
    <label for="input_password">Password:</label>
    <input id="input_password" type="text" name="password" value="Pass"><br>

    <!--Submit button-->
    <br>
    <input type="submit" value="Submit">

    <!--Link to the login page-->
    <a href="./login_view.php">Login</a>
</form>

</body>
</html>