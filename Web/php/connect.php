<?php

    $connect = new mysqli('localhost', 'root', '', 'skyrimweaponshop', '3306');

    if($connect -> errno !=0)
    {
        die("Hiba! ".$connect -> error);
    }
    if(!$connect -> set_charset("utf8"))
    {
        echo "Couldn't set character set";
    }

?>