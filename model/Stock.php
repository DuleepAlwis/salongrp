<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 7:00 PM
 */

class Stock
{
    public $id;
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
        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('sssss', $this->itemName, $this->quantity, $this->price, $this->brand, $this->preOrderl);

            if ($stmt->execute()) {

                return true;
            }

            return $stmt->error;
        }
        catch(Exception $ex)
        {
            return $ex->getMessage();
        }

    }

    public function UpdateItem($id,$quantity)
    {
        $sql = "update stock set quantity=? where id=?;";

        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('ii', $quantity, $id);
            return $stmt->execute();
        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function UpdateItemAll()
    {
        $sql = "update stock set name=?,quantity=?,price=?,brand=?,preOrderl=? where id=?;";
        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('sssssi', $this->itemName, $this->quantity, $this->price, $this->brand, $this->preOrderl, $this->id);
            return $stmt->execute();
        }
        catch(Exception $ex)
        {
            return $ex->getMessage();
        }
        }

    public function RemoveItem($id)
    {
        $sql = "delete from stock where id=?;";
        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param('i', $id);
            if ($stmt->execute()) {
                return true;
            } else {
                return $stmt->error;
            }
        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function getAll()
    {
        $sql = "select id,name,quantity,brand,price,preOrderl from stock;";
        try
        {
            if($stmt = $this->con->prepare($sql))
            {
                if($stmt->execute())
                {


                    return $stmt;


                }
            }
            else
            {
                return null;
            }
        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function editAll($id,$text,$column_name)
    {

        $sql = "UPDATE stock SET " . $column_name . "='" . $text . "' WHERE id='" . $id . "'";
        if (mysqli_query($this->con, $sql)) {
            echo 'Data Updated';
        } else {
            echo $this->con->error;
        }
    }

}