<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>New Client</title>
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
        <h1 id="maintitle">Add A New Client</h1>
        <form method="post" action="new_order_process.php">
            <label for="choosenewweaponname">Choose A Weapon</label><br>
            <select name="choosenewweaponname" id="choosenewweaponname">
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

            <label for="choosenewclientname">Choose A Client</label><br>
            <select name="choosenewclientname" id="choosenewclientname">
            <?php

            require_once('../connect.php');
            
            $sql = "SELECT clientname FROM client";
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
            <label for="chooseneworderdate">Order Date:</label><br>
            <input type="date" id="chooseneworderdate" name="chooseneworderdate" value="2022-01-01" min="1900-01-01" max="2022-11-11"><br>
            <input type="submit" value="Add New Order" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>