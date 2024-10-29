<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];



    try {
        require_once "dbh_inc.php";

        $query = "DELETE FROM friends WHERE firstname = :firstname AND lastname = :lastname;";

        $stmt = $PDO -> prepare($query);

        $stmt -> bindParam(":firstname", $firstname);
        $stmt -> bindParam(":lastname", $lastname);
  

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