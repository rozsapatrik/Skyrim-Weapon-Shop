<?php

require_once('../connect.php');

if(isset($_POST['Submit']))
{   
    $selected = $_POST['deleteclientname'];
    $sql = "DELETE FROM client WHERE clientname = '$selected'";
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