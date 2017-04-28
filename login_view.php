<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
    
</head>
<body>

<div class="login-container">
    <div class="column">
            <h2 class="ui blue image header"> 
                <div class="">
                    Log-in to your account
                </div>
            </h2>
            <form action="./login_control.php" class="ui large form" method="post">

                <div class="ui segment">

                    <!--User name input field-->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input id="input_usr_name" type="text" class="form-control" name="usr_name" placeholder="Username">
                        </div>
                    </div>

                    <!--Password input field-->
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input id="input_password" type="password" class="form-control" name="password"
                               placeholder="Password">
                        </div>
                    </div>
                    <input type="submit"  class="ui fluid large blue submit button" value="Login"/>
                </div>

            </form>
            <div class="ui message">
                No account with us? <a href="./register_view.php">Sign Up</a>
            </div>
    </div>
</div>

</body>
</html>