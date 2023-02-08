<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    $selected = $_POST['chooseclientname'];
    $newName = $_POST['editedclientname'];
    $newRace = $_POST['editedclientrace'];

    if(!isset($newName) || trim($newName) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }
    else if(!isset($newRace) || trim($newRace) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }

    $sql = "UPDATE client SET clientname = '$newName', clientrace = '$newRace' WHERE clientname = '$selected'";
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