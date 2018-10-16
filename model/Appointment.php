<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/13/2018
 * Time: 7:22 PM
 */

class Appointment
{
    protected $AppointmentId;
    protected $CustomerId;
    protected $BeauticianId;
    protected $ServiceId;
    protected $date;
    protected $stime;
    protected $etime;
    protected $state;
    protected $con;
    //Appointment states   0-Not completed   1-Completed   2-Postponed
    /**
     * @return mixed
     */
    public function __construct()
    {

        //$this->con = (new Database())->getConnection();
        $this->con = Database::getConnection();
    }

    public function AddAppointment()
    {

    }
    public function getAll($date,$employee)
    {
        if($employee==0)
        {
            $sql = "select appointment.appointmentid,customer.name,appointment.date,appointment.time,services.name,employee.name,appointment.price from appointment,services,employee  where appointment.beauticianid=employee.id and
                        appointment.serviceid=services.id and appointment.date='$date' and appointment.state='0';";
        }
        else
        {
            $sql = "select appointment.appointmentid,customer.name,appointment.date,appointment.time,services.name,employee.name,appointment.price from appointment,services,employee  where appointment.beauticianid=employee.id and
                        appointment.serviceid=services.id and appointment.date='$date' and appointment.beauticianid='$employee' and appointment.state='0';";
        }
        if($stmt = $this->con->prepare($sql))
        {
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;
    }

    public function getAppointments($date)
    {
        $sql = "select appointment.appointmentid,customer.name,appointment.price,services.name from appointment,customer,services where appointment.customerId=customer.customerId and appointment.state='0' 
                and appointment.serviceid=services.serviceid;";
        if($stmt = $this->con->prepare($sql))
        {
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;

    }

    public function getCustomerAppointment($customerid)
    {
        $sql = "select appointmentid,date,time,state.price,services.name,employee.name from appoinntment,employee,services where appointment.customerid=? 
                  and appointment.beauticianid=employee.id and appointment.serviceid=services.id;";
        if($stmt = $this->con->prepare($sql))
        {
            $stmt->bind_param("s",$customerid);
            if($stmt->execute())
            {
                return $stmt;
            }
        }
    }

}
