<?php
include "Database.php";
class charts
{

    protected $con;

    public function __construct()
    {

        //$this->con = (new Database())->getConnection();
        $this->con = Database::getConnection();
    }
    public function getAppointments($fdate,$tdate)
    {
        $sql = "SELECT services.name, SUM(nonappointmentpay.price)
                FROM nonappointmentpay,services
                WHERE (date BETWEEN '$fdate' AND '$tdate')  AND services.id=nonappointmentpay.serviceid 
                GROUP BY serviceid;";



        if($stmt = $this->con->prepare($sql))
        {
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;

    }
    public function getproduct($fdate,$tdate)
    {
        $sql = "SELECT stock.name, SUM(purchaseitem.price)
                FROM purchaseitem,stock
                WHERE (date BETWEEN '$fdate' AND '$tdate') AND purchaseitem.itemid=stock.id
                GROUP BY itemid;";


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