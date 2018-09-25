<?php

include "../model/Database.php";
include "../model/Stock.php";

$stock = new Stock();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if($stock->UpdateItem($_POST["Id"],$_POST["q"]))
    {
        echo "OK".$_POST["q"];
        return true;
    }
    else
    {

    }
}
?>

