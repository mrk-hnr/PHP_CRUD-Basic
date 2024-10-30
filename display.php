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
        echo "<div class='flex justify-around text-xl'>";
        echo "<h2>First Name</h2>";
        echo "<h2>Last Name</h2>";
        echo "<h2>Connection</h2>";
        echo "</div>";

        
        
        foreach ($result as $row) {
            echo "<div class='flex justify-around text-sm gap-* text-center items-center'> <p class='text-center my-auto py-2 w-20'>{$row['firstname']}</p>";
            echo "<p class='w-20'>{$row['lastname']}</p>";
            echo "<p class='w-20'>{$row['assoc']}</p> </div>";      
        }
        
    }
    ?>

    </body>
</html>