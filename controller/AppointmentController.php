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
            try
            {
                $str = "You made an Appointment on ".$appointment->date." ".$appointment->time." "."Total price: ".$appointment->price;
                mail($_SESSION["email"],"Appontment on",$str);
            }
            catch (Exception $x)
            {

            }
            return true;
        }
        return $result;
    }

}

function updateAppointment($appointmentId)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $appointment = new Appointment();
        $appointment->AppointmentId = $appointmentId;
        $appointment->BeauticianId = $_POST["beautician"];
        $appointment->date = $_POST["date"];
        $appointment->time = $_POST["time"];
        $result = $appointment->UpdateAppointment($appointmentId);
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

function getBeauticianPreAppointments($id)
{
    $appointment = new Appointment();
    return $appointment->getBeauticianPreAppointments($id);
}

function getBeauticianNewAppointments($id)
{
    $appointment = new Appointment();
    return $appointment->getBeauticianNewAppointments($id);
}



