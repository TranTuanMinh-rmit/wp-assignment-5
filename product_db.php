<?php

// TODO: change username and read password from environment variable
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "assignment5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create table queries
$createProductsTable = "CREATE TABLE IF NOT EXISTS Products (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    productName VARCHAR(20) NOT NULL,
    price DECIMAL(10, 2),
    stock INT NOT NULL
)";

$createUsersTable = "CREATE TABLE IF NOT EXISTS Users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userName VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL,
    userAddress VARCHAR(20),
    userMobile VARCHAR(10),
    role enum('admin', 'mod', 'user') NOT NULL,
    UNIQUE(userName)
)";

$createCartTable = "CREATE TABLE IF NOT EXISTS Carts (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    userId INT NOT NULL,
    productId INT NOT NULL,
    quantity INT NOT NULL,
    foreign key (userId) references Users(id),
    foreign key (productId) references Products(id)
)";

if (!$conn->query($createProductsTable) or !$conn->query($createUsersTable) or !$conn->query($createCartTable)){
    echo "ERROR: $conn->error";
}

$createAdmin = "INSERT INTO Users 
                    VALUES ('admin', 'admin', '', '', 'admin')
)";

if (!$conn->query($createAdmin))
    echo "ERROR: $conn->error";

$conn->close();
