<?php

// Debug mode
$debug = false;

// Server login credentials
$servername = "localhost";
$username = "test";
$password = "test314account";

// Post data
$usr_name = $_POST["usr_name"];
$password = $_POST["password"];

// Create connection
$conn = new mysqli("localhost", "test", "test314account");  // Hardcoded for now

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($debug) {
    echo "Connected successfully<br>";
}

// Get the passwords with the supplied username
$getUserLogin = "
SELECT cust.usr_name, cust.password
FROM webstore.customers AS cust
WHERE cust.usr_name = '{$usr_name}';
";

$results = $conn->query($getUserLogin);

// Check the password against the password supplied
if ($results->num_rows == 1) {

    $row = $results -> fetch_assoc();

    if($debug) {
        echo "user: " . $row["usr_name"] . "<br>";
        echo "password: " . $row["password"] . "<br>";
    }

    if($row["password"] == $password){

        // Go to the menu page
        header("Location: ./menu_view.php");
        exit;

    } else {

        // Password doesn't match
        echo "Invalid password.";
    }

} else {
    echo "The user \"" . $usr_name . "\" is not registered.";
}

$conn->close();
?>

<!--Link to registration and login-->
<a href="login_view.php">Login</a><a href="register_view.php">Register</a>