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
        case "4":getBeauticians();break;
        case "5":getServices();break;
        case "6":removeEmpService($_POST["empId"],$_POST["serviceId"]);break;

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

//Number 4 for getBeauticans
function getBeauticians()
{
    $employee = new Employee();

    if (($result = $employee->getBeauticians("B")) != null) {
        $emp = array();
        $result->bind_result($id, $name);
        $i = 0;
        while ($result->fetch()) {
            $emp[$id] = $name;
        }
        echo json_encode([true, $emp]);


    } else {
        echo json_encode([false, null]);
    }
}

function getServices()
{
    $service = new Service();
    $result = $service->getServices();
    $arr = array();
    $i = 0;
    if($result)
    {
        $result->bind_result($id,$name,$price,$duration);
        while($result->fetch())
        {
            $arr[$id] = array($name,$price,$duration);
            $i = $i+1;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false]);
    }

}

function removeEmpService($emp,$service)
{
    $serviceEmp = new ServiceEmployee();
    $result = $serviceEmp->removeEmpService($emp,$service);
    if($result)
    {
        echo json_encode([true,$result]);
    }
    else
    {
        echo json_encode([false,$result]);
    }


}
?>