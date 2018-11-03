<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/16/2018
 * Time: 2:00 AM
 */
include "../../model/Database.php";
include "../../model/Appointment.php";

function getAll($date,$employee)
{
    $appointment = new Appointment();
    if($employee=="Any")
    {
        $employee = 0;
    }

    return $appointment->getAll($date,$employee);
}

function getCustomerAppointments($id)
{
    $appointment = new Appointment();
    return $appointment->getCustomerAppointments($id);
}


