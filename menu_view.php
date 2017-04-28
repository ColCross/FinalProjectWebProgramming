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
</head>
<body>
<div class="wrapper Absolute-Center">
    <div class="content">

        <?php

        // Check if the session has an id
        if (isset($_SESSION['id'])) {
            // Greet the user with their first name
            echo "<h1>Welcome, " . $_SESSION["f_name"] . " .</h1>";
        } else {
            // Greet anonymously
            echo "<h1 class='center-text'>Welcome</h1>";
        }
        ?>

        <br>
        <br>
        <div class="nav">
            <form action="./profile_control.php">
                <input type="submit" class="btn-primary btn-md center-text" value="Profile"/>
            </form>

            <form action="./cart_view.php">
                <input type="submit" class="btn-primary btn-md center-text" value="Cart"/>
            </form>

            <form action="./store_view.php">
                <input type="submit" class="btn-primary btn-md center-text" value="Store"/>
            </form>
        </div>
    </div>

</div>
</body>
</html>