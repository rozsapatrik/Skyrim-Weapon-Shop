<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    $selected = $_POST['newweapontype'];
    $newName = $_POST['newweaponname'];
    $newPrice = $_POST['newweaponprice'];
    $newDamage = $_POST['newweapondamage'];

    if(!isset($newName) || trim($newName) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }
    else if(!isset($newPrice) || trim($newPrice) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }
    else if(!isset($newDamage) || trim($newDamage) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }

    $presql = "SELECT weaponname FROM weapon WHERE weaponname = '$newName'";
    $sql = "INSERT INTO weapon (weaponname, weapontypename, price, damage) VALUES ('$newName', '$selected', '$newPrice', '$newDamage')";

    $preresult = $connect -> query($presql);

    if(!$preresult)
    {
        header("Location: ../message/error_msg.php");
        exit;
    }

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

$connect -> close();

?>