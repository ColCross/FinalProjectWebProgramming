<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>

<?php

// Check if the session has an id
if (isset($_SESSION['id'])) {
    // Greet the user with their first name
    echo "<h1>Welcome, " . $_SESSION["f_name"] . " .</h1>";
} else {
    // Greet anonymously
    echo "<h1>Welcome</h1>";
}
?>

<p>THIS IS A BLANK MENU PAGE!</p>

<a href="profile_view.php">Profile</a>

<p>FUTURE LINK TO STORE</p>

</body>
</html>