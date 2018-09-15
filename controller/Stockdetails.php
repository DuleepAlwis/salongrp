<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/11/2018
 * Time: 2:13 PM
 */

include "../model/Stock.php";
var_dump($_POST);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    //var_dump($_POST["Id"]);

    switch ($_POST["number"])
    {
        case 1: itemUpdate($_POST["Id"],$_POST["q"]);
        case 2: itemQuantity();
    }
}

function itemUpdate($id,$quantity)
{
    $stock = new Stock();
    if($stock->UpdateItem($id,$quantity))
    {
        return true;
    }
    return false;
}

function itemQuantity()
{
    $stock = new Stock();
    $quantity = $stock->getQuantity();
    //$quantity = array('aaa'=>1,'bbb'=>2,'ccc'=>3);
    //var_dump($quantity);
    $quantity->bind_result($id,$quantity);
    //var_dump($quantity->get_result());
    $i=0;
    $result = array('1'=>'aaa','2'=>'bbb','3'=>'ccc');
    //$quantity = array(array("Id"=>1,"quantity"=>13));
   /* while(($row=$quantity->fetch())!=null)
    {
        $result[$i++] = $row;
    }*/
    echo json_encode($result);
}