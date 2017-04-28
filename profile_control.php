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
$getOrders = "
SELECT *
FROM webstore.orders
INNER JOIN webstore.inventory ON webstore.inventory.id = webstore.orders.inventory_id
WHERE webstore.orders.customer_id = '{$_SESSION["id"]}';
";

// Send query
$results = $conn->query($getOrders);

// Build the result into an array
$resultsArray = array();
while ($row = $results -> fetch_array()){
    $resultsArray[] = $row;
}

// Add the results to the session and redirect to the profile page
session_start();
$_SESSION["orders"] = $resultsArray;
header("Location: ./profile_view.php");
exit;

?>