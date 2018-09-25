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

    /**
     * @return mixed
     */
    //Appointment state   0=not completed  1=completed  2=postponed
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
            $sql = "select * from appointment where date='$date';";
        }
        else
        {
            $sql = "select appointment.* from appointment,employee where appointment.date='$date' and employee.name='$employee' 
                    and appointment.beauticianid=employee.id;";
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

}
