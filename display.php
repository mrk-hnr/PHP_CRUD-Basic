<?php


    try {
        require_once "includes/dbh_inc.php";

        $query = "SELECT * FROM friends;";

        $stmt = $PDO -> prepare($query);

        $stmt -> execute();

        $result = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        $PDO = null;
        $stmt = null;

    } catch(PDOException $error) {
       die("Query Failed - " . $error -> getMessage());
    }


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Friend's List Tracker</title>
    </head>
    <body>
    <?php

    if (empty($result)) {
        echo "<div>";
        echo "<p>You don't have a friend!</p>";
        echo "</div>";
    } else {
        foreach ($result as $row) {
            echo "{$row['firstname']} {$row['lastname']} - {$row['assoc']}";
            echo "<br>";            
        }
    }
    ?>

    </body>
</html>