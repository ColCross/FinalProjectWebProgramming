<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration</title>

    <!-- Making Bob Ross proud -->
    <!-- who's bob ross? -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
    
</head>
<body>
<div class="login-container">
    <h2 class="ui blue image header">
        <div class="">
            Join us today
        </div>
    </h2>
    <form action="./register_control.php" class="ui large form" method="post">

        <div class="ui segment">
            
            <!--First name input field-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input id="input_f_name" type="text" class="form-control" name="f_name" placeholder="First name">
                </div>
            </div>

            <!--Last name input field-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input id="input_l_name" type="text" class="form-control" name="l_name" placeholder="Last name">
                </div>
            </div>

            <!--User name input field-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="user icon"></i>
                    <input id="input_usr_name" type="text" class="form-control" name="usr_name" placeholder="User name">
                </div>
            </div>

            <!--Password input field-->
            <div class="field">
                <div class="ui left icon input">
                    <i class="lock icon"></i>
                    <input id="input_password" type="password" class="form-control" name="password" placeholder="Password">
                </div>
            </div>

            
                <!--Submit button-->
                <input type="submit" class="ui fluid large blue submit button" value="Submit">


                <!--Link to the login page-->
                <div class="center-text">
                    <a href="./login_view.php">Login</a>
                </div>
            </div>
        </div>
    </form>

</div>

</body>
</html>