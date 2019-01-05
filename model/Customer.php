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
    public $passw;
    public $state=0;
    public $terms=0;
    public $validationc=0;
    protected $db;
    protected $con;

    public function __construct()
    {
        //$this->db = new Database();
        $this->con = Database::getConnection();
    }

    public function AddCustomer()
    {
        $checkSql = "select email from customer where email=?;";
        $checkStmt = $this->con->prepare($checkSql);
        $checkStmt->bind_param("s",$this->email);
        if($checkStmt->execute())
        {
            if($checkStmt)
            {
                $checkStmt->bind_result($emailCheck);

                while ($checkStmt->fetch())
                {
                    if (strcmp($this->email, $emailCheck) == 0)
                    {
                        return false;
                    }
                }
            }
        }
        $sql = "insert into customer(name,email,address,tpno,password,passw,city,district,state,terms,validationc,gender) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ssssssssssss',$this->name,$this->email,$this->address,$this->tpno,$this->password
            ,$this->passw,$this->city,$this->district,$this->state,$this->terms,$this->validationc,$this->gender);
        if($stmt->execute())
        {

            return true;
        }

        return false;

    }


    public function UpdateCustomer()
    {
        $checkSql = "select email from customer where email=?;";
        $checkStmt = $this->con->prepare($checkSql);
        $checkStmt->bind_param("s",$this->email);
        if($checkStmt->execute())
        {
            if($checkStmt)
            {
                $checkStmt->bind_result($emailCheck);

                while ($checkStmt->fetch())
                {
                    if (strcmp($this->email, $emailCheck) == 0)
                    {
                        return "Email Exist";
                    }
                }
            }
        }

        $sql = "update customer set name=?,email=?,tpno=?,city=?,district=?,address=?,gender=? where customer.id=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sssssssi",$this->name,$this->email,$this->tpno,$this->city,$this->district,$this->address,$this->gender,$this->id);
        if($stmt->execute())
        {
            return true;
        }
        echo $stmt->error;
        return $stmt->error;
    }

    public function ChangePassword($id)
    {
        $sql = "update customer set password=? where customer.id=?;";
        $stmt = $this->con->prepare($sql);
        $passw = md5($this->password);
        $stmt->bind_param("ss",$passw,$id);
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
