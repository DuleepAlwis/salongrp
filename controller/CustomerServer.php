<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/14/18
 * Time: 7:09 PM
 */

require_once "../model/Database.php";
require_once "../model/Service.php";
require_once "../model/Employee.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch($_POST["number"])
    {
        case "1":getBeautician();break;
        case "2":getServices();break;
    }
}

function getBeautician()
{
    $beautician = new Employee();
    if(($result=$beautician->getBeautician()))
    {
        $result->bind_result($id,$name);
        $arr = array();
        $i = 0;
        while ($result->fetch())
        {
            $arr[$id] = $name;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false,null]);
    }
}

function getServices()
{
    $service = new Service();
    if(($result=$service->getServices()))
    {
        $result->bind_result($id,$name,$price,$duration);
        $arr = array();
        $i = 0;
        while ($result->fetch())
        {
            $arr[$id] = array($name,$price,$duration);
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false,null]);
    }

}

?>