<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/10/2018
 * Time: 1:32 AM
 */

require_once("../../model/Database.php");
require_once("../../model/Stock.php");


function AddItem()
{
   // echo $_POST["Name"]." ".$_POST["Quantity"];
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        

            $stock = new Stock();

            $stock->itemName = $_POST["Name"];
            $stock->quantity = $_POST["Quantity"];
            $stock->brand = $_POST["brand"];
            $stock->preOrderl = $_POST["preOrderl"];
            $stock->price = $_POST["price"];
            $result = $stock->AddItem();
            return $result;

    }
}

function UpdateItemAll()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {


            $stock = new Stock();
            $stock->id = $_POST['editId'];
            $stock->itemName = $_POST["editName"];
            $stock->quantity = $_POST["editQuantity"];
            $stock->brand = $_POST["editBrand"];
            $stock->preOrderl = $_POST["editPreOrderl"];
            $stock->price = $_POST["editPrice"];
            $result = $stock->UpdateItemAll();
            return $result;

    }
}

function RemoveItem($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {

            $stock = new Stock();


            if ($stock->RemoveItem($id)) {
                return true;
            } else {
                return false;
            }

    }
}

function getProducts()
{

        $stock = new Stock();

        return $stock->getAll();


}
?>
