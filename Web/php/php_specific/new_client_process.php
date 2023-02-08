<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{
    $selected = $_POST['newclientrace'];
    $newName = $_POST['newclientname'];

    if(!isset($newName) || trim($newName) == '')
    {
        header("Location: ../message/fill_msg.php");
        exit;
    }

    $presql = "SELECT clientname FROM client WHERE clientname = '$newName'";
    $sql = "INSERT INTO client (clientname, clientrace) VALUES ('$newName', '$selected')";

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