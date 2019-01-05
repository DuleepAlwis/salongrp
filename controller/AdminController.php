<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/15/2018
 * Time: 6:23 PM
 */

require_once("../../model/Database.php");
require_once("../../model/ServiceEmployee.php");
require_once("../../controller/EmployeeController.php");
require_once ("../../controller/StockController.php");
require_once("../../controller/ServiceController.php");



function sendEmail($email,$subject,$msg,$headers)
{
    if(mail($email,$subject,$msg,$headers))
    {
        return true;
    }
    return false;
}

function insertServiceEmployee()
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $empService = new ServiceEmployee();
        $empService->serviceName = $_POST["service"];
        $empService->employeeName = $_POST["employee"];
        if($empService->addEmpService())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

function getServiceEmployee()
{
    $serviceEmp = new ServiceEmployee();
    return $serviceEmp->getServiceEmployee();
}
?>
