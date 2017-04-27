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

// Get the info for the supplied username
$getUserLogin = "
SELECT *
FROM webstore.customers AS cust
WHERE cust.usr_name = '{$usr_name}';
";

// Send query
$results = $conn->query($getUserLogin);

// Make sure only one row was returned
if ($results->num_rows == 1) {

    // Get an associative array
    $row = $results->fetch_assoc();

    // Debug text
    if ($debug) {
        echo "id: " . $row["id"] . "<br>";
        echo "user: " . $row["usr_name"] . "<br>";
        echo "password: " . $row["password"] . "<br>";
        echo "first name: " . $row["f_name"] . "<br>";
        echo "last name: " . $row["l_name"] . "<br>";
    }

    // Check the submitted password against the password supplied
    if ($row["password"] == $password) {

        // Open a session and store login credentials
        session_start();
        $_SESSION['id'] = $row['id'];
        $_SESSION['f_name'] = $row['f_name'];
        $_SESSION['l_name'] = $row['l_name'];

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
<a href="./login_view.php">Login</a><a href="./register_view.php">Register</a>