<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Delete Client</title>
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
        <h1 id="maintitle">Delete A Client</h1>
        <form method="post" action="delete_client_process.php">
            <label for="deleteclientname">Choose A Client</label><br>
            <select name="deleteclientname" id="deleteclientname">
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
            <input type="submit" value="Delete Selected Client" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>