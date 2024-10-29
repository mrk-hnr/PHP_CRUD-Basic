<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $assoc = $_POST["assoc"];


    try {
        require_once "dbh_inc.php";

        $query = "INSERT INTO friends (firstname, lastname, assoc) VALUES (:firstname, :lastname, :assoc);";

        $stmt = $PDO -> prepare($query);

        $stmt -> bindParam(":firstname", $firstname);
        $stmt -> bindParam(":lastname", $lastname);
        $stmt -> bindParam(":assoc", $assoc);

        $stmt -> execute();

        $PDO = null;
        $stmt = null;
        header("location: ../index.php");
        die();

    } catch(PDOException $error) {
       die("Query Failed - " . $error -> getMessage());
    }
} else {
    header("location: ../index.php");
}