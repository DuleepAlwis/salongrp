<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/13/2018
 * Time: 7:22 PM
 */

class Appointment
{
    public $AppointmentId;
    public $CustomerId;
    public $BeauticianId;
    public $ServiceId;
    public $date;
    public $time;
    public $stime;
    public $etime;
    public $state;
    protected $con;
    //Appointment states   0-Not completed   1-Postponed   2-Completed
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
        $sql = "insert into appointment(customerid, date, time, state, price, serviceid, beauticianid) values(?,?,?,?,?,?,?);";
        $stmt = $this->con->prepare($sql);
        $this->state = "0";
        $stmt->bind_param("sssssss",$this->CustomerId,$this->date,$this->time,$this->state,$this->price,$this->ServiceId,$this->BeauticianId);
        if($stmt->execute())
        {
            return true;
        }
        return $stmt->error;
    }

    
    public function getAllAppointments($date,$employee)
    {
        if($employee==0)
        {
            $sql = "select appointment.appointmentid,customer.name,appointment.date,appointment.time,services.name,employee.name,appointment.price from appointment,services,employee,customer where appointment.beauticianid=employee.id and
                        appointment.serviceid=services.id and customer.id=appointment.customerid and appointment.date=? and appointment.state=?;";
            $state = 0;
            $stmt = $this->con->prepare($sql);
                $stmt->bind_param("ss",$date,$state);

        }
        else
        {
            $sql = "select appointment.appointmentid,customer.name,appointment.date,appointment.time,services.name,employee.name,appointment.price from appointment,services,employee,customer
  where appointment.beauticianid=employee.id and
                        appointment.serviceid=services.id and customer.id=appointment.customerid and appointment.date=? and appointment.beauticianid=? and appointment.state=?;";
            $state = 0;
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("sss",$date,$employee,$state);
        }


            if($stmt->execute())
            {
                return $stmt;
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

    public function getCustomerAppointments($id)
    {
        $sql = "select appointment.appointmentid,appointment.date,appointment.time,appointment.state,appointment.price,services.name,employee.name
         from appointment,employee,services where customerid=? and appointment.serviceid=services.id and appointment.beauticianid=employee.id;";

        if($stmt = $this->con->prepare($sql))
        {
            $stmt->bind_param("s",$id);
            if($stmt->execute())
            {
                return $stmt;
            }
        }
         return null;
    }

    public function getBeauticianAppointments($id)
    {
        $sql = "select appointment.appointmentid,appointment.date,appointment.time,appointment.state,appointment.price,services.name,employee.name
         from appointment,employee,services where beauticianid=? and appointment.serviceid=services.id and appointment.beauticianid=employee.id;";

        if($stmt = $this->con->prepare($sql))
        {
            $stmt->bind_param("s",$id);
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;
    }

    public function getAvailableTime($date,$empId,$serviceId)
    {
        $sql = "select time from appointment where state=? and date=? and beauticianid=? and serviceid=?;";
        $stmt = $this->con->prepare($sql);
        $state = 0;
        $stmt->bind_param("ssss", $state, $date, $empId, $serviceId);
        if($stmt->execute())
        {
          return $stmt;
        }
        else
        {
            return null;
        }

    }

    public function UpdateAppointment($id)
    {
        $sql = "update appointment set beauticianid=?,date=?,time=? where appointmentid=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssss",$this->BeauticianId,$this->date,$this->time,$id);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->affected_rows>0)
            {
                return true;
            }
        }
        return $stmt->affected_rows;
    }

}
