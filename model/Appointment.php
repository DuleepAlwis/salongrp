<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/13/2018
 * Time: 7:22 PM
 */

include "Database.php";
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

    public function __construct()
    {
<<<<<<< HEAD
        $this->con = Database::getConnection();
=======
        $this->con = (new Database())->getConnection();
>>>>>>> 54a2114fdd0765d76bc7c4558ab73bf29229f497
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


}