<?php
session_start();

// Get the cart data as a string
$cartString = $_POST["cart"];

// Build the cart into an array
$cart = array();
$temp = explode(",", $cartString);
for($i = 0; $i < count($temp) - 1; $i = $i + 2 ){
    $subArray = array($temp[$i], $temp[$i+1]);
    array_push($cart, $subArray);
}

// Add the array to the session
$_SESSION["cart"] = $cart;

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
header("Location: ./cart_view.php");
exit;

?>