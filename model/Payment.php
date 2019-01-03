<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:44 PM
 */

class Payment
{
    public $paymentId;
    public $price;
    public $date;
    public $time;
    private $con;


    /**
     * @return mixed
     */
    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function AppointmentInsert($id,$price)
    {
        $sqlInsert = "insert into appointmentpay(appointmentid, price, date, time) values(?,?,?,?);";
        $stmtInsert = $this->con->prepare($sqlInsert);
        $stmtInsert->bind_param("ssss",$id,$price,date(y-m-d),time());
        $sqlUpdate = "update appointment set state=? where appointmentId=?;";
        $stmtUpdate = $this->con->prepare($sqlUpdate);
        $stmtUpdate->bind_param("ss",'2',$id);
        if($stmtInsert->execute() && $stmtUpdate->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function NonAppointmentInsert($serviceid,$beauticianid,$price,$date,$time)
    {

        $sqlInsert = "insert into nonappointmentpay(serviceid,beauticianid,price,date,time) values(?,?,?,?,?);";
        $stmtInsert = $this->con->prepare($sqlInsert);
        $stmtInsert->bind_param("sssss",$serviceid,$beauticianid,$price,$date,$time);

        if($stmtInsert->execute())
        {
            return $stmtInsert->affected_rows;
        }
        else
        {
            return $stmtInsert->error;
        }
    }

    public function ProductInsert($productid,$quantity,$price,$date,$time)
    {
        //$date = date("y-m-d");
        //$time = date("H:i:s");
        $sqlInsert = "insert into purchaseitem(itemid,date,time,quantity,price) values(?,?,?,?,?);";
        $stmtInsert = $this->con->prepare($sqlInsert);
        $stmtInsert->bind_param("sssss",$productid,$date,$time,$quantity,$price);
        //$sqlUpdate = "update stock set stock.quantity=stock.quantity- where stock.id=$productid;";
        //$stmtUpdate = $this->con->prepare($sqlUpdate);
        //$stmtUpdate->bind_param("ss",$quantity,$productid);
        if($stmtInsert->execute())//&& $stmtUpdate->execute())
        {
            return $stmtInsert->affected_rows;
        }
        else
        {
            return $stmtInsert->error;
        }
    }



}
