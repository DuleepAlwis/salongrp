<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:41 PM
 */

include "Database.php";

class Employee
{
    public $id;
    public $name;
    public $nic;
    public $email;
    public $tpno;
    public $address;
    public $password;
    public $joindate;
    public $ulevel;
    public $gender;
    protected $con;


    /**
     * @return mixed
     */

    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function AddEmployee()
    {
        $sql = "insert into employee(name,NIC,email,address,tpno,password,joindate,validationc,ulevel,gender) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ssssssssss',$this->name,$this->nic,$this->email,$this->address,$this->tpno,$this->password
            ,$this->joindate,$this->validationc,$this->ulevel,$this->gender);
        if($stmt->execute())
        {

            return true;
        }
        echo $stmt->error;
        return false;
    }

    public function getEmployee($uname)
    {
        $sql = "select * from employee where email=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$uname);
        if($stmt->execute())
        {
            return $stmt;
        }

        else
        {
            return null;
        }
    }

    public function getAll()
    {
        $sql = "select id,NIC,name,tpno,email,address,joindate,gender,ulevel from employee;";


        if(($stmt = $this->con->prepare($sql)))
        {
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;
    }

}
