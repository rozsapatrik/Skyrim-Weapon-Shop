<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>New Weapon</title>
</head>
<body>
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="../list.php">List</a>
        <a href="../edit.php">Edit</a>
        <a href="../delete.php">Delete</a>
        <a href="../new.php" class="active">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Add A New Weapon</h1>
        <form method="post" action="new_weapon_process.php">
            <label for="newweaponname">Weapon Name</label><br>
            <input type="text" id="newweaponname" name="newweaponname" placeholder="Weapon Name"><br>
            <label for="newweapontype">Weapon Type</label><br>
            <select name="newweapontype" id="newweapontype">
                <option value="Dagger">Dagger</option>
                <option value="Mace">Mace</option>
                <option value="Sword">Sword</option>
                <option value="War Axe">War Axe</option>
                <option value="Battleaxe">Battleaxe</option>
                <option value="Greatsword">Greatsword</option>
                <option value="Warhammer">Warhammer</option>
                <option value="Bow">Bow</option>
                <option value="Crossbow">Crossbow</option>
            </select><br>
            <label for="newweaponprice">Weapon Price</label><br>
            <input type="number" id="newweaponprice" name="newweaponprice" placeholder="123"><br>
            <label for="newweapondamage">Weapon Damage</label><br>
            <input type="number" id="newweapondamage" name="newweapondamage" placeholder="456"><br>
            <input type="submit" value="Add new weapon" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>