<?php

// DSN = Data Source Name
$DSN = "mysql:host=localhost;dbname=crud-basic"; 
$DBUsername = "root";
$DBPassword = "";

try {
    // PDO = PHP Data Objects
    $PDO = new PDO($DSN, $DBUsername, $DBPassword);
    $PDO -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // If error, throw an exception

} catch(PDOException $error) {
    echo "Connection Failed: " . $error -> getMessage();
}