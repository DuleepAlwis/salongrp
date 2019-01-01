<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/13/2018
 * Time: 12:47 AM
 */

include "../../model/Database.php";

function getAppointments($date)
{
    require_once("../../model/Appointment.php");
    $appointment = new Appointment();
    if(isset($date))
    {
        return $appointment->getAppointments($date);
    }
    return null;


}


function getServices()
{
    require_once("../../model/Service.php");
    $services = new Service();
    return $services->getServices();
}

function getStock()
{
    require_once("../../model/Stock.php");
    $stock = new Stock();
    return $stock->getAll();
}
?>




