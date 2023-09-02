<?php

//create 4 variable for connection
$host = 'localhost';

//database name
$dbname = 'bookstore';

//user
$user = 'root';

//$password 
$password = '';

//
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

try {
    // Attempt to create a new PDO instance for database connection
    $conn = new PDO($dsn, $user, $password);

    // Set error mode/handling in PDO to exceptions
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    // If an exception occurs, handle it here
    echo 'Connection failed: ' . $e->getMessage();
}

