<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:39 PM
 */
class Customer
{
    public $id;
    public $name;
    public $email;
    public $tpno;
    public $address;
    public $city;
    public $district;
    public $gender;
    public $password;
    public $state=0;
    public $terms=0;
    public $validationc;
    protected $db;
    protected $con;

    public function __construct()
    {
        //$this->db = new Database();
        $this->con = Database::getConnection();
    }

    public function AddCustomer()
    {

        $sql = "insert into customer(name,email,address,tpno,password,city,district,state,terms,validationc,gender) VALUES(?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('sssssssssss',$this->name,$this->email,$this->address,$this->tpno,$this->password
            ,$this->city,$this->district,$this->state,$this->terms,$this->validationc,$this->gender);
        if($stmt->execute())
        {

            return true;
        }

        return false;

    }


    public function UpdateCustomer()
    {
        $sql = "update customer set name=?,email=?,tpno=?,city=?,district=?,address=? where customer.id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ssssssi",$this->name,$this->email,$this->tpno,$this->city,$this->district,$this->address,$this->id);
        if($stmt->execute())
        {
            
            return true;
        }
        return false;
    }

    public function ChangePassword($id)
    {
        $sql = "update customer set password=? where customer.id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss",md5($this->password),$id);
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }

    public function getCustomer($uname)
    {
        $sql = "select * from salon.customer where email=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$uname);
        if($stmt->execute())
        {
            return $stmt;
        }

        return null;

    }

    public function getAll()
    {
        $sql = "select id,name,email,address,tpno,terms,city,district,gender from customer;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {
            return $stmt;
        }

        return null;
    }


}
