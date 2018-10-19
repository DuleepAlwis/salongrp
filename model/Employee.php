<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:41 PM
 */



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

        $sql = "insert into employee(name,NIC,email,address,tpno,password,joindate,validationc,type,gender) VALUES(?,?,?,?,?,?,?,?,?,?)";
        if($stmt = $this->con->prepare($sql)){
        $stmt->bind_param("ssssssssss",$this->name,$this->nic,$this->email,$this->address,$this->tpno,$this->password
            ,$this->joindate,$this->validationc,$this->ulevel,$this->gender);
        $stmt->execute();
		return true;
		}else{
			echo $this->con->error;
            return false
    {
        $sql = "insert into employee(name,NIC,email,address,tpno,password,joindate,validationc,type,gender) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param('ssssssssss',$this->name,$this->nic,$this->email,$this->address,$this->tpno,$this->password
            ,$this->joindate,$this->validationc,$this->uleve,$this->gender);
        if($stmt->execute())
        {


           // return true;
        }
        
		//echo $this->con->error;
        //return false;
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
        $sql = "select id,NIC,name,tpno,email,address,joindate,gender,type from employee;";

        //$result = mysqli_query($this->con, $sql);
        if(($stmt = $this->con->prepare($sql)))
        {
            if($stmt->execute())
            {
                $result = $stmt->get_result();
                return $result;
            }
        }
        return null;
    }
    public function Delete($id){
        $sql = "DELETE FROM employee WHERE id = '$id'";
        if(mysqli_query($this->con, $sql))
        {
            return $id;
        }

        else{
            echo $this->con->error;
            return false;
        }
    }

}
