 <?php

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
    
    public function getEmployee($uname)
    {
        $sql = "SELECT id, name, tpno, email, address, password,
        NIC, gender FROM employee WHERE id=?";
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
