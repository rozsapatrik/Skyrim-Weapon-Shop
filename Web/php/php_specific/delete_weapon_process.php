<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    
    $selected = $_POST['deleteweaponname'];
    $sql = "DELETE FROM weapon WHERE weaponname = '$selected'";
    $result = $connect -> query($sql);

    if(!$result)
    {
        header("Location: ../message/error_msg.php");
        exit;
    }
    else
    {
        header("Location: ../message/del_msg.php");
        exit;
    }
}

$connect -> close();

?>