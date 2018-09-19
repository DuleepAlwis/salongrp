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

    public $itemName;
    public $quantity;
    public $price;
    public $brand;
    public $preOrderl;
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
        $sql = "insert into stock(name,quantity,price,brand,preOrderl) values(?,?,?,?,?);";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('sssss',$this->itemName,$this->quantity,$this->price,$this->brand,$this->preOrderl);
        $stmt->execute();
        if($stmt->affected_rows>0)
        {

            return true;
        }
        echo $stmt->error;
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
        $sql = "select id,name,quantity,brand,price,preOrderl from stock;";
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