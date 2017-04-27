<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <!-- Making Bob Ross proud -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="wrapper Absolute-Center">
    <form action="./register_control.php" class="form-horizontal" method="post">

        <div class="content">
            <h3 class="center-text">Create an Account</h3>
            <br>

            <!--First name input field-->
            <div class="form-group">
                <label for="input_f_name">First name:</label>
                <input id="input_f_name" type="text" class="form-control" name="f_name" placeholder="First name">
            </div>

            <!--Last name input field-->
            <div class="form-group">
                <label for="input_l_name">Last name:</label>
                <input id="input_l_name" type="text" class="form-control" name="l_name" placeholder="Last name">
            </div>

            <!--User name input field-->
            <div class="form-group">
                <label for="input_usr_name">User name:</label>
                <input id="input_usr_name" type="text" class="form-control" name="usr_name" placeholder="User name">
            </div>

            <!--Password input field-->
            <div class="form-group">
                <label for="input_password">Password:</label>
                <input id="input_password" type="password" class="form-control" name="password" placeholder="Password">
            </div>


            <br>
            <div class="center-text">
                <!--Submit button-->
                <input type="submit" class="btn-primary btn-md center-text" value="Submit">
                <br>
                <br>

                <!--Link to the login page-->
                <a href="./login_view.php">Login</a>
            </div>
        </div>
    </form>

</div>

</body>
</html>