<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>List</title>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="list.php" class="active">List</a>
        <a href="edit.php">Edit</a>
        <a href="delete.php">Delete</a>
        <a href="new.php">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Which Table Do You Want To List From?</h1>
        <a href="php_specific/list_weapon.php"><input type="button" value="Weapon" class="mybutton"></a>
        <a href="php_specific/list_weapon_sorted.php"><input type="button" value="Weapon (Sorted By Price)" class="mybutton"></a>
        <a href="php_specific/list_client.php"><input type="button" value="Client" class="mybutton"></a>
        <a href="php_specific/list_client_sorted.php"><input type="button" value="Client (Sorted By Race)" class="mybutton"></a>
        <a href="php_specific/list_order.php"><input type="button" value="Order" class="mybutton"></a>
        <a href="php_specific/list_weaponwield.php"><input type="button" value="Complex Listings" class="mybutton"></a>
    </div>

</body>
</html>