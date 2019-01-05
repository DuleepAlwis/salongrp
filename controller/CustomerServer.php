<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/14/18
 * Time: 7:09 PM
 */

require_once "../model/Database.php";
require_once "../model/Employee.php";
require_once "../model/Service.php";
require_once "../model/ServiceEmployee.php";
require_once "../model/Appointment.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch($_POST["number"])
    {
        case "1":getBeautician();break;
        case "2":getServices();break;
        case "3":getAppointmentBeautician($_POST["service"]);break;
        case "4":getAvailableTimeSlots($_POST["date"],$_POST["employee"],$_POST["service"]);break;
    }
}

function getBeautician()
{
    $beautician = new Employee();
    $result = $beautician->getBeauticians("B");
    $arr = array();
    $i = 0;
    if($result)
    {

        $result->bind_result($id,$name);
        while($result->fetch())
        {
            $arr[$id] = $name;
            $i = $i+1;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false]);
    }


}

function getAppointmentBeautician($service)
{
    $beautician = new ServiceEmployee();
    $result = $beautician->getAppointmentEmployee($service);
    $arr = array();
    $i = 0;
    if($result)
    {

        $result->bind_result($id,$name);
        while($result->fetch())
        {
            $arr[$id] = $name;
            $i = $i+1;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false]);
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

function getAvailableTimeSlots($date,$empId,$serviceId)
{
    $appointment = new Appointment();
    $result = $appointment->getAvailableTime($date,$empId,$serviceId);
    $arr = array();
    $i=0;
    if($result)
    {
        $result->bind_result($time);
        while($result->fetch())
        {

            $arr[$i] = $time;
            $i = $i+1;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false]);
    }
}
