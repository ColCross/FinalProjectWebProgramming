<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/cart.css">
</head>
<body>

<div class="wrapper">
    <?php

    $total = 0;

    // Check for a cart in the session
    if (isset($_SESSION["cart"]) && isset($_SESSION["inventory"])) {

        // Sum everything in the cart
        foreach ($_SESSION["cart"] as $item) {
            foreach ($_SESSION["inventory"] as $row) {
                if ($item[0] == $row["id"]) {
                    $total = $total + ($row["price"] * $item[1]);
                }
            }
        }

        // Display the total
        echo "<p>Total: $" . $total . "</p>";

        // Remove the inventory from the session
        unset($_SESSION["inventory"]);

    } else {

        // Send to the store front
        header("Location: ./checkout_control.php");
        exit;
    }

    ?>

</div>

</body>
</html>
