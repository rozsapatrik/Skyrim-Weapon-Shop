<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Edit Weapon</title>
</head>
<body>
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="../list.php">List</a>
        <a href="../edit.php"  class="active">Edit</a>
        <a href="../delete.php">Delete</a>
        <a href="../new.php">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Edit A Weapon</h1>
        <form method="post" action="edit_weapon_process.php">
            <label for="chooseweaponname">Choose A Weapon</label><br>
            <select name="chooseweaponname" id="chooseweaponname">
            <?php

            require_once('../connect.php');

            $sql = "SELECT weaponname FROM weapon";
            $result = $connect -> query($sql);

            if($result)
            {
                while($row = $result -> fetch_array())
                {
                    echo "<option value='{$row[0]}'>{$row[0]}</option>";
                }
            }
            $connect -> close();

            ?>
            </select><br>
            <label for="editedweaponname">Edited Weapon Name</label><br>
            <input type="text" id="editedweaponname" name="editedweaponname" placeholder="Edited Weapon Name"><br>
            <label for="editedweaponprice">Edited Weapon Price</label><br>
            <input type="text" id="editedweaponprice" name="editedweaponprice" placeholder="Edited Weapon Price"><br>
            <label for="editedweapondamage">Edited Weapon Damage</label><br>
            <input type="text" id="editedweapondamage" name="editedweapondamage" placeholder="Edited Weapon Damage"><br>
            <input type="submit" value="Edit selected weapon" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>