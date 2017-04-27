<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
</head>
<body>

<?php

// Check for a cart in the session
if (isset($_SESSION["cart"]) && isset($_SESSION["inventory"])) {

    // Print everything in the inventory
    foreach ($_SESSION["cart"] as $item) {

        foreach ($_SESSION["inventory"] as $row) {

            if($item[0] == $row["id"]){
                echo "<p> Item: " . $row["name"] . "</p>";
                echo "<p> Price: " . $row["price"] . "</p>";
                echo "<p> Quantity: " . $item[1] . "</p>";
                echo "<br>";
            }
        }
    }

    // Remove the inventory from the session
    unset($_SESSION["inventory"]);

} else {

    // Send to the store front
    header("Location: ./store_view.php");
    exit;
}

?>

<a href="./checkout_control.php">
    <button>Checkout</button>
</a>

</body>
</html>
