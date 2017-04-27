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

<a href="./profile_view.php">Profile</a>
<br>
<a href="./cart_view.php">Cart</a>
<br>
<a href="./store_view.php">Store</a>

</body>
</html>