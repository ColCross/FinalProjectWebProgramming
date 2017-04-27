<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Store</title>
</head>
<body>

<?php

// Check for an inventory in the session
if (isset($_SESSION["inventory"])) {

    // Print everything in the inventory
    foreach ($_SESSION["inventory"] as $row) {
        echo "<p> Item: " . $row["name"] . "</p>";
        echo "<p> Price: " . $row["price"] . "</p>";
        echo "<p> Stock: " . $row["stock"] . "</p>";
        echo "<input id=\"" . $row["id"] . "\" type=\"number\" value=\"0\">";
        echo "<button onclick=\"addItem(" . $row["id"] . ")\">Add to cart</button>";
        echo "<br>";
        echo "<br>";
    }

    // Remove the inventory from the session
    unset($_SESSION["inventory"]);

} else {

    // Get the inventory
    header("Location: ./store_control.php");
    exit;
}

?>

<button onclick="addToCart()">Finish Shopping</button>

</body>

<script src="./jquery-3.2.1.js"></script>
<script type="text/javascript">

    var cart = [];

    function addItem(id) {
        var quantity = document.getElementById(id).value;

        // Array
        var item = [id, quantity];
        cart.push(item);

        alert(quantity + " item(s) added to the cart.");
    }

    function addToCart() {

        var cartString = cart.toString();

        var url = "./cart_control.php";
        var form = $('<form action="' + url + '" method="post">' +
            '<input type="text" name="cart" value="' + cartString + '" />' +
            '</form>');
        $('body').append(form);
        form.submit();
    }

</script>

</html>
