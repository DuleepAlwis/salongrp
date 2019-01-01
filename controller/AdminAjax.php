<?php
require_once("../model/Database.php");
require_once("../model/Stock.php");
require_once("../model/Service.php");
require_once("../model/Employee.php");
require_once("../model/ServiceEmployee.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch ($_POST["number"])
    {
        case "1":removeProduct($_POST["Id"]);break;
        case "2":removeService($_POST["Id"]);break;
        case "3":removeEmployee($_POST["Id"]);break;
    }
}

function removeProduct($id)
{
    $stock = new Stock();
    $result = $stock->RemoveItem($id);
    if($result)
    {
        echo json_encode([$result]);
    }
    else
    {
        echo json_encode([$result]);
    }
}

function removeService($id)
{
    $service = new Service();
    $result = $service->RemoveService($id);
    if($result)
    {
        echo json_encode([$result]);
    }
    else
    {
        echo json_encode([$result]);
    }
}

function removeEmployee($id)
{
    $employee = new Employee();
    $result = $employee->removeEmployee($id);
    if($result)
    {
        echo json_encode([true]);
    }
    else
    {
        echo json_encode([false]);
    }
}

?>