<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Edit Client</title>
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
        <h1 id="maintitle">Edit A Client</h1>
        <form method="post" action="edit_client_process.php">
            <label for="chooseclientname">Choose A Client</label><br>
            <select name="chooseclientname" id="chooseclientname">
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
            $connect -> close();

            ?>
            </select><br>
            <label for="editedclientname">Edited Client Name</label><br>
            <input type="text" id="editedclientname" name="editedclientname" placeholder="Edited Client Name"><br>
            <label for="editedclientname">Edited Client Race</label><br>
            <select name="editedclientrace" id="editedclientrace">
                <option value="Altmer">Altmer</option>
                <option value="Argonian">Argonian</option>
                <option value="Bosmer">Bosmer</option>
                <option value="Breton">Breton</option>
                <option value="Dunmer">Dunmer</option>
                <option value="Imperial">Imperial</option>
                <option value="Khajit">Khajit</option>
                <option value="Nord">Nord</option>
                <option value="Orismer">Orismer</option>
                <option value="Redguard">Redguard</option>
            </select><br>
            <input type="submit" value="Edit selected client" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>