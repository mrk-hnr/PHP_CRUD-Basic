<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friend's List Tracker</title>
</head>
<body>

    <h3>Add a Friend</h3>

    <form action="includes/formhandler_inc.php" method="POST">
        <input type="text" name="firstname" placeholder="First name">
        <br>
            
        <input type="text" name="lastname" placeholder="Last name">
        <br>
            
        <input type="text" name="assoc" placeholder="Connection status">
        <br>

        <button>Submit</button>
    </form>

     <hr>

    <h3>Modify Friend Details</h3>

    <form action="includes/friendupdate_inc.php" method="POST">
        <input type="text" name="firstname" placeholder="First name">
        <br>
            
        <input type="text" name="lastname" placeholder="Last name">
        <br>
            
        <input type="text" name="assoc" placeholder="Connection status">
        <br>

        <button>Submit</button>
    </form>

    <hr>

    <h3>Remove a Friend</h3>

    <form action="includes/frienddelete_inc.php" method="POST">
        <input type="text" name="firstname" placeholder="First name">
        <br>
            
        <input type="text" name="lastname" placeholder="Last name">
        <br>
        
        <button>Submit</button>
    </form>
    <hr>
    
    <h3>Friend List</h3>
    <?php
        require_once "display.php";
    ?>
</body>
</html>