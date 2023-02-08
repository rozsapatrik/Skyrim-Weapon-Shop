<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    $selected = $_POST['chooseweaponname'];
    $newName = $_POST['editedweaponname'];
    $newPrice = $_POST['editedweaponprice'];
    $newDamage = $_POST['editedweapondamage'];

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

    $sql = "UPDATE weapon SET weaponname = '$newName', price = '$newPrice', damage='$newDamage' WHERE weaponname = '$selected'";
    $result = $connect -> query($sql);

    if(!$result)
    {
        header("Location: ../message/error_msg.php");
        exit;
    }
    else
    {
        header("Location: ../message/edit_msg.php");
        exit;
    }
}

$connect -> close();

?>