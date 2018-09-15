<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:39 PM
 */
include "Database.php";
class Customer
{
    public $id;
    public $name;
    public $email;
    public $tpno;
    public $address;
    public $city;
    public $district;
    public $password;
    public $username;
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
        /*$this->name = $name;
        $this->email = $email;
        $this->tpno = $tpno;
        $this->address = $address;
        $this->password = $password;
        $this->state = 0;
        $this->terms = 0;*/
        //$details = array($this->name,$this->email,$this->tpno,$this->address,$this->password,$this->city,$this->district,0,0,$this->validationc);
        $sql = "insert into customer(name,email,address,tpno,password,city,district,state,terms,validationcode) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ssssssssss',$this->name,$this->email,$this->tpno,$this->address,$this->password
        ,$this->city,$this->district,$this->state,$this->terms,$this->validationc);
        if($stmt->execute())
        {

            return true;
        }
        echo $stmt->error;
        return false;

    }

    public function getCustomer()
    {

    }


}
