<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <title>Listed Weapons</title>
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
        <h1 id="maintitle">Orders Where The Ordered Weapon Costs At Least 1000</h1>
        <table class="listeditems">
            <tr><th>Client Name</th><th>Weapon Name</th><th>Order Cost</th></tr>
        <?php

        require_once('../connect.php');

        $sql = "SELECT orders.clientname, orders.weaponname, weapon.price FROM orders INNER JOIN weapon ON orders.weaponname = weapon.weaponname WHERE weapon.price > 1000 GROUP BY weapon.weaponname ORDER BY weapon.price DESC";
        $result = $connect -> query($sql);

        if($result)
        {
            while($row = $result -> fetch_array())
            {
                echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td></tr>";
            }
        }

        ?>
        </table>
    </div>
    <div id="maindiv">
        <h1 id="maintitle">First 10 Weapon Wield Categories With The Most Weapons</h1>
        <table class="listeditems">
            <tr><th>Weapon Wield</th><th>Weapons In Category</th></tr>
        <?php

        require_once('../connect.php');

        $sql = "SELECT weapontype.weaponwield, COUNT(weapon.weapontypename) FROM weapontype INNER JOIN weapon ON weapontype.weapontypename = weapon.weapontypename GROUP BY weapontype.weaponwield ORDER BY COUNT(weapon.weapontypename) DESC LIMIT 10";
        $result = $connect -> query($sql);

        if($result)
        {
            while($row = $result -> fetch_array())
            {
                echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
            }
        }

        ?>
        </table>
        <div id="myfirstchart" style="height: 250px;"></div>
    </div>
    <div id="maindiv">
        <h1 id="maintitle">Weapons That Have At Least 10x Higher Price Than Damage</h1>
        <table class="listeditems">
            <tr><th>Weapon Name</th><th>Weapon Damage</th><th>Weapon Price</th><th>Multiplier</th></tr>
        <?php

        require_once('../connect.php');

        $sql = "SELECT weapon.weaponname, weapon.damage, weapon.price, (weapon.price/weapon.damage) AS Multiplier FROM weapon WHERE weapon.weaponname IN (SELECT weapon.weaponname FROM weapon WHERE (weapon.price/weapon.damage) > 10) ORDER BY Multiplier DESC";
        $result = $connect -> query($sql);

        if($result)
        {
            while($row = $result -> fetch_array())
            {
                echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td><td>{$row[2]}</td><td>{$row[3]}</td></tr>";
            }
        }
        ?>
        </table>
    </div>
</body>
</html>

<script>
    Morris.Donut({
  element: 'myfirstchart',
  colors: ["#ff0000", "#570000", "#1f0000"],
  data: [
    <?php

    require_once('../connect.php');

    $sql = "SELECT weapontype.weaponwield, COUNT(weapon.weapontypename) FROM weapontype INNER JOIN weapon ON weapontype.weapontypename = weapon.weapontypename GROUP BY weapontype.weaponwield ORDER BY COUNT(weapon.weapontypename) DESC LIMIT 10";
    $result = $connect -> query($sql);

    if($result)
    {
        while($row = $result -> fetch_array())
        {
            echo "{label: '".$row[0]."', value: ".$row[1]."},";
        }
    }
    ?>
  ]
});
</script>