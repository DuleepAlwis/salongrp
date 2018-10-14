<?php
include "../model/Stock.php";
$em = new Stock();
if($em->editAll($_POST["id"],$_POST["text"],$_POST["column_name"])){
    echo "successfully deleted";

}