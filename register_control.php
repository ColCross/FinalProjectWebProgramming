<?php

// Debug mode
$debug = false;

// Server login credentials
$servername = "localhost";
$username = "test";
$password = "test314account";

// Post data
$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$usr_name = $_POST["usr_name"];
$password = $_POST["password"];

// Create connection
$conn = new mysqli("localhost", "test", "test314account");  // Hardcoded for now

// Check connection
if ($conn->connect_error) {
    echo "The database could not be reached.";
    die("Connection failed: " . $conn->connect_error);
}
if($debug) {
    echo "Connected successfully<br>";
}

// Insert the entered user info into the table
$insert = "
INSERT INTO webstore.customers (f_name, l_name, usr_name, password)
VALUES ('{$f_name}', '{$l_name}', '{$usr_name}', '{$password}')
";

if ($conn->query($insert) === TRUE) {
    if ($debug) {
        echo "New record created successfully<br>";
    }
    echo "You have successfully registered as \"" . $usr_name . "\".<br>";
} else {
    if ($debug) {
        echo "Error: " . $insert . "<br>" . $conn->error;
    }
    echo "The username \"" . $usr_name . "\" has already been taken.<br>";
}

// Close the connection
$conn->close();

// Route to the login page
header("Location: ./login_view.php");
exit;
?>