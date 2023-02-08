<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <title>Listed Clients</title>
</head>
<body>
    <div class="topnav">
        <a href="../index.php">Home</a>
        <a href="../list.php" class="active">List</a>
        <a href="../edit.php">Edit</a>
        <a href="../delete.php">Delete</a>
        <a href="../new.php">New</a>
    </div>

    <div id="maindiv">
        <h1 id="maintitle">Listed Clients</h1>
        <table class="listeditems">
            <tr><th>Client Name</th><th>Client Race</th></tr>
        <?php

        require_once('../connect.php');

        $sql = "SELECT * FROM client";
        $result = $connect -> query($sql);

        if($result)
        {
            while($row = $result -> fetch_array())
            {
                echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
            }
        }
        $connect -> close();

        ?>
        </table>
    </div>

</body>
</html>