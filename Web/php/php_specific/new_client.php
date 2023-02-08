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
        <form method="post" action="new_client_process.php">
            <label for="newclientname">Client Name</label><br>
            <input type="text" id="newclientname" name="newclientname" placeholder="Client Name"><br>
            <label for="newclientrace">Client Race</label><br>
            <select name="newclientrace" id="newclientrace">
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
            <input type="submit" value="Add new client" class="mybutton" name="Submit">
        </form>
    </div>

</body>
</html>