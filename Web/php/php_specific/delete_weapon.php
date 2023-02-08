<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Delete Weapon</title>
</head>
<body>
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="../list.php">List</a>
        <a href="../edit.php">Edit</a>
        <a href="../delete.php" class="active">Delete</a>
        <a href="../new.php">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Delete A Weapon</h1>
        <form method="post" action="delete_weapon_process.php">
            <label for="deleteweaponname">Choose A Weapon</label><br>
            <select name="deleteweaponname" id="deleteweaponname">
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
            
            ?>
            </select><br>
            <input type="submit" value="Delete Selected Weapon" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>