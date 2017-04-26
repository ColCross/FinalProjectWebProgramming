<?php
$servername = "localhost";
$username = "username";
$password = "password";

$f_name = "";
$l_name = "";
$usr_name = "";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

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
    echo "Table customers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$insert = "INSERT INTO customers (f_name, l_name, usr_name, password)
VALUES ('{$f_name}', '{$l_name}', '{$usr_name}', '{$password}'";

if ($conn->query($insert) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}