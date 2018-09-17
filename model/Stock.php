<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 7:00 PM
 */

include "Database.php";
class Stock
{
    public $itemCode;
    public $itemName;
    public $quantity;
    public $cquantity;
    public $brand;
    protected $con;


    /**
     * @return mixed
     */


    /**
     * @param mixed $quantity
     */

    public function __construct()
    {
        //$this->con = (new Database())::getConnection();
        $this->con = Database::getConnection();
    }

    public function AddItem()
    {
        $sql = "insert into stock(name,quantity,currentq,brand) values(?,?,?,?);";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ssss',$this->name,$this->quantity,$this->quantity,$this->brand);
        if($stmt->execute())
        {

            return true;
        }

        return false;
    }

    public function UpdateItem($id,$quantity)
    {
        $sql = "update stock set quantity=? where id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ii',$quantity,$id);
        return $stmt->execute();
    }

    public function RemoveItem($id)
    {
        $sql = "delete from stock where id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('i',$id);
        return $stmt->execute();
    }

    public function getAll()
    {
        $sql = "select * from stock;";
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