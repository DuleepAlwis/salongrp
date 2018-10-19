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
        $this->con = (new Database())->getConnection();
    }

    public function AddAppointment()
    {

    }

    public function getAll($date,$employee)
    {
        if($employee==0)
        {
            $sql = "select * from salon.appointment where date='$date' and ;";
        }
        else
        {
            $sql = "select appointment.* from salon.appointment,salon.employee where date='$date' and emploee.name='$employee' 
                    and salon.appointment.beauticianid=salon.employee.id;";
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
    public function getAppointments($id)
    {
        $sql = "select appointment.beauticianid, appointment.customerid, appointment.date, appointment.time, appointment.price, services.name  from appointment,services 
                where services.id = appointment.serviceid ";


        if(($stmt = $this->con->prepare($sql)))
        {
            if($stmt->execute())
            {
                $result = $stmt->get_result();
                return $result;
            }
        }
        echo $this->con->error;
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

