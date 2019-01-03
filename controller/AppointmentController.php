<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/16/2018
 * Time: 2:00 AM
 */
require_once("../../model/Database.php");
require_once("../../model/Appointment.php");

function addAppointment($customerId)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $appointment = new Appointment();
        $appointment->CustomerId = $customerId;
        $appointment->ServiceId = $_POST["service"][0];
        $appointment->BeauticianId = $_POST["beautician"];
        $appointment->date = $_POST["date"];
        $appointment->time = $_POST["time"];
        $appointment->price = $_POST["totalprice"];
        $result = $appointment->AddAppointment();
        if($result)
        {
            return true;
        }
        return $result;
    }

}

function getAppointmentEmployee($date,$employee)
{
    $appointment = new Appointment();
    if($employee=="Any")
    {
        $employee = 0;
    }

    return $appointment->getAllAppointments($date,$employee);
}

function getCustomerAppointments($id)
{
    $appointment = new Appointment();
    return $appointment->getCustomerAppointments($id);
}


