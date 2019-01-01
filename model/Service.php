<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:48 PM
 */


class Service
{

    public $serviceId;
    public $name;
    public $price;
    public $duration;
    public $con;

    /**
     * @return mixed
     */
    public function __construct()
    {

        $this->con = Database::getConnection();
    }

    public function AddService()
    {
        $sql = "insert into services(name,price,duration) values(?,?,?);";

        $stmt = null;
        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("sss",$this->name,$this->price,$this->duration);
            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return $stmt->error;
            }

        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function UpdateService($id)
    {
        $sql = "update services set name=?,price=?,duration=? where id=?;";

        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("ssss",$this->name,$this->price,$this->duration,$id);
            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return $stmt->error;
            }

        }
        catch (Exception $ex)
        {
            return $ex->getMessage();
        }
    }

    public function getServices()
    {
        $sql = "select id,name,price,duration from services;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {
            return $stmt;
        }
        return null;
    }

    public function RemoveService($id)
    {
        $sql = "delete from services where id=?;";
        try
        {
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("s",$id);
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


}
