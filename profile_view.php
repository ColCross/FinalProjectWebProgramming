<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
</head>
<body>

<?php

// Check if the session has an id
if (isset($_SESSION['id'])) {

    // Display user info
    echo "<p>First name: " . $_SESSION["f_name"] . "</p>";
    echo "<p>Last name: " . $_SESSION["l_name"] . "</p>";
    echo "<p>User id: " . $_SESSION["id"] . "</p>";

} else {

    // They are not logged in
    echo "<p>You are not logged in.</p>";
    echo "<a href='./login_view.php'>Login</a><a href='./register_view.php'>Register</a>";
}
?>

</body>
</html>
