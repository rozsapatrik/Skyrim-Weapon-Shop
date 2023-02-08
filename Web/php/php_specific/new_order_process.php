<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    $selectedWeapon = $_POST['choosenewweaponname'];
    $selectedClient = $_POST['choosenewclientname'];
    $orderDate = $_POST['chooseneworderdate'];

    $presql = "SELECT * FROM orders WHERE clientname = '$selectedClient' AND weaponname = '$selectedWeapon'";
    $sql = "INSERT INTO orders (clientname, weaponname, orderdate) VALUES ('$selectedClient', '$selectedWeapon', '$orderDate')";

    //$preresult = $connect -> query($presql);

    if($preresult = $connect -> query($presql))
    {
        if($preresult -> num_rows == 0)
        {
            $result = $connect -> query($sql);
    
            if(!$result)
            {
                header("Location: ../message/error_msg.php");
                exit;
            }
            else
            {
                header("Location: ../message/new_msg.php");
                exit;
            }
        }
        else
        {
            header("Location: ../message/exists_msg.php");
            exit;
        }
    }
    else
    {
        header("Location: ../message/already_msg.php");
        exit;
    }
}

$connect -> close();

?>