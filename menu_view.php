<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.css">
    <script src="https://cdn.jsdelivr.net/semantic-ui/2.2.10/semantic.min.js"></script>
    
</head>
<body class="pushable">
        


 <!-- Page Contents -->
    <div class="pusher">
        <div class="ui inverted vertical masthead center aligned segment">

            <div class="ui container">
                <div class="ui large secondary inverted pointing menu">
                   
                    
                    <a class="item" href="./profile_control.php">Profile</a>
                    <a class="item" href="./cart_view.php">Cart</a>
                    <a class="item" href="./store_view.php">Store</a>
                    <!--Do you have to use form action for this?? if so, please change it to form and keep the class, item -->
                    <!--Do you have to use form action for this?? if so, please change it to form and keep the class, item -->
                    <!--Do you have to use form action for this?? if so, please change it to form and keep the class, item -->

                    <?php

                    // Check if the session has an id
                    if (isset($_SESSION['id'])) {
                        // Greet the user with their first name
                        echo "<div class='right item'>Welcome, " . $_SESSION["f_name"] . " </div>";
                    } else {
                        // Greet anonymously
                        echo "<div class='right item'>
                            <a class='ui inverted button' href='./login_view.php'>Log in</a>
                            <a class='ui inverted button' href='./register_view.php'>Sign Up</a>
                        </div>";
                    }
                    ?>

                
                </div>
            </div>

            <div class="ui text container">
                <h1 class="ui inverted header">
                    Money Money
                </h1>
                <h2>Give me your money, and I give you what you want.</h2>
                <a href="./store_view.php">
                <div class="ui huge primary button">
                   Shop
                 <i class="right arrow icon"></i></div>
                    </a>
            </div>

        </div>

        <div class="ui vertical stripe segment">
            <div class="ui middle aligned stackable grid container">
                <div class="row">
                    <div class="center aligned wide column">
                        <h3 class="ui header">We Take Money From Our Customers</h3>
                        <p>We can give you what you want for an exchange of currency.</p>
                        <h3 class="ui header">Shoes?</h3>
                        <p>Yes that's right, we have them.</p>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="center aligned column">
                        <form action="./store_view.php">
                            <input type="submit" class="ui huge button" value="Check Them Out"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="ui vertical stripe quote segment">
            <div class="ui equal width stackable internally celled grid">
                <div class="center aligned row">
                    <div class="column">
                        <h3>"What a Company"</h3>
                        <img class="ui large centered rounded image" src="img/doge.png" />
                        <p>That is what they all say about us</p>
                    </div>
                    <div class="column">
                        <h3>"I shouldn't have gone with their competitor."</h3>
                        <p>blah blah blah.. much regret blah blah</p>
                    </div>
                </div>
            </div>
        </div>

        


        <div class="ui inverted vertical footer segment">
            <div class="ui container">
                <div class="ui stackable inverted divided equal height stackable grid">
                    <div class="three wide column">
                        <h4 class="ui inverted header">About</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">Contact Us Not</a>
                            
                        </div>
                    </div>
                    <div class="three wide column">
                        <h4 class="ui inverted header">Services</h4>
                        <div class="ui inverted link list">
                            <a href="#" class="item">New Items Pre-Order</a>
                            <a href="#" class="item">How To Access</a>
                            
                        </div>
                    </div>
                    <div class="seven wide column">
                        <h4 class="ui inverted header">Footer Header</h4>
                        <p>Extra space for a call to action inside the footer that could help re-engage users.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>