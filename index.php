<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/index.css">
    
    <title>Friend's List Tracker</title>
</head>
<body>
    <main>
        <div class="flex justify-around pt-40">
        <button id="button_add-friend" class="p-4 rounded-md bg-stone-800 text-white w-48 text-base hover:text-stone-800 hover:bg-gray-200 transition-all ease-in hover:border-gray-700 border-transparent border-2 border-solid">Add a Friend</button>
        <button id="button_edit-friend"  class="p-4 rounded-md bg-stone-800 text-white w-48 text-base hover:text-stone-800 hover:bg-gray-200 transition-all ease-in hover:border-gray-700 border-transparent border-2 border-solid">Modify Friend Details</button>
        <button id="button_delete-friend" class="p-4 rounded-md bg-stone-800 text-white w-48 text-base hover:text-stone-800 hover:bg-gray-200 transition-all ease-in hover:border-gray-700 border-transparent border-2 border-solid">Remove a Friend</button>
        </div>

        <div id="form__friend-add">
            <form action="includes/formhandler_inc.php" method="POST" class="flex flex-col justify-center">
                <input type="text" name="firstname" placeholder="First name" class="text-center border-solid mx-auto mt-6 p-1 rounded-md text-stone-800 w-96 bg-gray-200 placeholder-gray-500 border border-solid border-stone-400">    
                <input type="text" name="lastname" placeholder="Last name" class="text-center border-solid mx-auto mt-1 p-1 rounded-md text-stone-800 w-96 bg-gray-200 placeholder-gray-500 border border-solid border-stone-400">
                <input type="text" name="assoc" placeholder="Connection status" class="text-center border-solid mx-auto mt-1 p-1 rounded-md text-stone-800 w-96 bg-gray-200 placeholder-gray-500 border border-solid border-stone-400">

                <button id="submit" class="px-4 pb-2 pt-1 bg-stone-800 text-white w-28 mx-auto my-2  rounded-md">Submit</button>

            </form>
        </div>
        

        <form action="" id="form__friend-edit">
            <h2>Edit Friend</h2>
        </form>
        <form action="" id="form__friend-delete">
            <h2>Delete Friend</h2>
        </form>

    </main>

    <?php echo "<script src='./js/script.js'></script>" ?>
</body>
</html>
