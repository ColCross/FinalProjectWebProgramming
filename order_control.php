<?php
session_start();

// Debug mode
$debug = false;

// Server login credentials
$servername = "localhost";
$username = "test";
$password = "test314account";

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

// Insert the orders into the table
foreach ($_SESSION["cart"] as $item) {
    $insertOrder = "
    ";
}

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

// Get the info for the inventory
$getInventory = "
SELECT *
FROM webstore.inventory;
";

// Send query
$results = $conn->query($getInventory);

// Build the result into an array
$resultsArray = array();
while ($row = $results -> fetch_array()){
    $resultsArray[] = $row;
}

// Close the connection
$conn->close();
?>

<!--Link to registration and login-->
<a href="./login_view.php">Login</a><a href="./register_view.php">Register</a>