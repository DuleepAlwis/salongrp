<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/20/2018
 * Time: 12:08 PM
 */

class Report
{
    protected $con;

    public function Report()
    {
        $this->con = Database::getConnection();
    }

    public function getPurchaseRevenue($startDate,$endDate)
    {
        $sql = "select pitem.paymentid as id,stock.name as name,pitem.date as datePuchased,pitem.time as timePurchased,pitem.quantity as quantity,pitem.price as price from purchaseitem as pitem,stock where pitem.date BETWEEN '$startDate' AND '$endDate' and pitem.itemid=stock.id order by pitem.paymentid ASC;";
        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            if($stmt->execute())
            {
                $stmt->store_result();
                if($stmt->num_rows>0)
                {
                    return $stmt;
                }
            }
            else
            {
                return null;
            }
        }

            return null;

    }

    public function getServiceRevenue($startDate,$endDate)
    {
        $sql = "select serviceP.paymentid as id,services.name as service,employee.name as employee,serviceP.price as price,serviceP.date as date,serviceP.time as time from nonappointmentpay as serviceP,services,employee where services.id=serviceP.serviceid and employee.id=serviceP.beauticianid and serviceP.date BETWEEN '$startDate' AND '$endDate' order by services.id ASC;";

        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            if($stmt->execute())
            {
                $stmt->store_result();
                if($stmt->num_rows>0)
                {
                    return $stmt;
                }
            }
            else
            {
                return null;
            }
        }

        return null;
    }

    public function getAppointmentRevenue($startDate,$endDate)
    {
        $sql = "select service.name as Service,employee.name as Beautician,appointmentpay.price as price,appointmentpay.date as date,
                 appointmentpay.time as time from employee,service,appointmentpay,appointment where appointment.id=appointmentpay.appointmentid and 
                 service.id=appointment.serviceid and employee.id=appointment.beauticianid;";
        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            if($stmt->execute())
            {
                $stmt->store_result();
                if($stmt->num_rows>0)
                {
                    return $stmt;
                }
            }
            else
            {
                return null;
            }
        }

        return null;
    }
}