<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Delete</title>
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
        <a href="list.php">List</a>
        <a href="edit.php">Edit</a>
        <a href="delete.php" class="active">Delete</a>
        <a href="new.php">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Which Table Do You Want To Delete From?</h1>
        <a href="php_specific/delete_weapon.php"><input type="button" value="Weapon" class="mybutton"></a>
        <a href="php_specific/delete_client.php"><input type="button" value="Client" class="mybutton"></a>
    </div>

</body>
</html>