<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/16/2018
 * Time: 2:00 AM
 */
require_once("../../model/Database.php");
require_once("../../model/Appointment.php");

function getAppointmentEmployee($date,$employee)
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


