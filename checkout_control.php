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
    die("Connection failed: " . $conn->connect_error);
}
if ($debug) {
    echo "Connected successfully<br>";
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

// Add the results to the session and redirect to the cart page
$_SESSION["inventory"] = $resultsArray;
header("Location: ./checkout_view.php");
exit;

?>