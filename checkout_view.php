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

    <form>
        <h4>Payment details</h4>

        <!--Card number-->
        <label for="card_number">Card number</label>
        <input type="text" name="card_number" id="card_number" placeholder="1234 5678 9012 3456"><p id="card_name"></p>
        <br>

        <!--Expire Date-->
        <label for="expiry_date">Expiry date</label>
        <input type="text" name="expiry_date" id="expiry_date" maxlength="5" placeholder="mm/yy">

        <!--CVV-->
        <label for="cvv">CVV</label>
        <input type="text" name="cvv" id="cvv" maxlength="3" placeholder="123">
        <br>

        <!--Name-->
        <label for="name_on_card">Name on card</label>
        <input type="text" name="name_on_card" id="name_on_card" placeholder="A Sample">
    </form>

    <button onclick="checkOut()" class="btn-primary btn-md center-text">Finish Shopping</button>

</div>

</body>

<script src="./jquery-3.2.1.js"></script>

<!--http://jquerycreditcardvalidator.com/-->
<script src="./jquery.creditCardValidator.js"></script>

<script type="text/javascript">

    // This is called every time the card number is changed
    $('#card_number').validateCreditCard(function(result) {
        if (result.length_valid && result.luhn_valid){
            $('#card_name').text(result.card_type.name);
        } else {
            $('#card_name').text("Invalid Card");
        }
    });

    function checkOut() {

        // Get card info
        var cardCheck =$('#card_number').validateCreditCard();

        // Complete checkout
        if (cardCheck.length_valid && cardCheck.luhn_valid){
            window.location.href = './order_control.php';
        }
    }

</script>

</html>
