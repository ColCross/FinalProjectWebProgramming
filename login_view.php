<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div class="wrapper Absolute-Center">
    <form action="./login_control.php" class="form-horizontal" method="post">

        <div class="content">
            <h3 class="center-text">User Login</h3>
            <br>

            <!--User name input field-->
            <div class="form-group">
                <label for="input_usr_name">User name:</label>
                <input id="input_usr_name" type="text" class="form-control" name="usr_name" placeholder="Username">
            </div>

            <!--Password input field-->
            <div class="form-group">
                <label for="input_password">Password:</label>
                <input id="input_password" type="password" class="form-control" name="password"
                       placeholder="Password">
            </div>

            <div class="center-text">
                <!--Submit button-->
                <br>
                <input type="submit" class="btn-primary btn-md center-text" value="Login">
                <br>
                <br>

                <!--Link to the registration page-->
                <a href="./register_view.php">Register</a>
            </div>
        </div>
    </form>
</div>

</body>
</html>