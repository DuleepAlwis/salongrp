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
    include "../../model/Appointment.php";
    $appointment = new Appointment();
    if(isset($date))
    {
        return $appointment->getAppointments($date);
    }
    return null;


}


function getServices()
{
    include "../../model/Service.php";
    $services = new Service();
    return $services->getServices();
}

function getStock()
{
    include "../../model/Stock.php";
    $stock = new Stock();
    return $stock->getAll();
}
?>




