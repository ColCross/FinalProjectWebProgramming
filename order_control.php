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
if ($debug) {
    echo "Connected successfully<br>";
}

// Insert the orders into the table
foreach ($_SESSION["cart"] as $item) {

    // Create order query
    $insertOrder = "
    INSERT INTO webstore.orders(customer_id, inventory_id, quantity)
    VALUES ('{$_SESSION['id']}', '{$item[0]}', '{$item[1]}');
    ";

    // Send query
    if ($conn->query($insertOrder) === TRUE) {
        if ($debug) {
            echo "Order Added<br>";
        }
    } else {
        if ($debug) {
            echo "Error: " . $insertOrder . "<br>" . $conn->error;
        }
    }
}

// Look for items in inventory and update the stock
foreach ($_SESSION["cart"] as $item) {

    // Get the info for the inventory
    $getInventory = "
    SELECT *
    FROM webstore.inventory;
     ";

    // Send query
    $results = $conn->query($getInventory);

    // output data of each row
    while ($row = $results->fetch_assoc()) {

        // Check the order id against the inventory id
        if ($row["id"] == $item[0]) {

            $newStock = ($row["stock"] - $item[1]);

            // Update the stock in the database
            $updateInventory = "
            UPDATE webstore.inventory SET stock='{$newStock}' WHERE id='{$row["id"]}';
            ";

            // Send query
            if ($conn->query($updateInventory) === TRUE) {
                if ($debug) {
                    echo "Stock Updated<br>";
                }
            } else {
                if ($debug) {
                    echo "Error: " . $updateInventory . "<br>" . $conn->error;
                }
            }
        }
    }
}

// Close the connection
$conn->close();

// Route to the profile page
header("Location: ./profile_view.php");
exit;
?>