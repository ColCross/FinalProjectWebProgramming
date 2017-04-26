<html>
<body>

<?php
$servername = "localhost";
$username = "test";
$password = "test314account";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$usr_name = $_POST["usr_name"];
$password = $_POST["password"];

// Create connection
$conn = new mysqli("localhost", "test", "test314account");  // Hardcoded for now

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";

$sql = "
CREATE TABLE IF NOT EXISTS `WebStore`.`customers` (
`id` INT NOT NULL AUTO_INCREMENT,
`f_name` VARCHAR(45) NOT NULL,
`l_name` VARCHAR(45) NOT NULL,
`usr_name` VARCHAR(45) NOT NULL,
`password` VARCHAR(45) NOT NULL,
PRIMARY KEY (`id`),
UNIQUE INDEX `usr_name_UNIQUE` (`usr_name` ASC))
ENGINE = InnoDB;
";

if ($conn->query($sql) === TRUE) {
    echo "Table customers created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$insert = "
INSERT INTO webstore.customers (f_name, l_name, usr_name, password)
VALUES ('{$f_name}', '{$l_name}', '{$usr_name}', '{$password}')
";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $insert . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>