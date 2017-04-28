<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>

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

            // Display user info
            echo "<div class='center-text'>";
            echo "<p>First name: " . $_SESSION["f_name"] . "</p>";
            echo "<p>Last name: " . $_SESSION["l_name"] . "</p>";
            echo "<p>User id: " . $_SESSION["id"] . "</p>";
            echo "</div>";

        } else {

            // They are not logged in
            echo "<div class='center-text'>";
            echo "<h2>You are not logged in</h2>";
            echo "<br>";
            echo "<a href='./login_view.php' style='padding-right: 20px;'>Login</a><a href='./register_view.php'>Register</a>";
            echo "</div>";
        }
        ?>
    </div>
</div>
</body>
</html>
