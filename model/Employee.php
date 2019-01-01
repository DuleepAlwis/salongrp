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
    public $passw;
    public $joindate;
    public $ulevel;
    public $gender;
    public $description;
    public $validationc=0;
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

        $sql = "insert into employee(name,NIC,email,address,tpno,password,passw,joindate,validationc,userLevel,gender,description) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        if($stmt = $this->con->prepare($sql))
        {
        $stmt->bind_param("ssssssssssss",$this->name,$this->nic,$this->email,$this->address,$this->tpno,$this->password
            ,$this->passw,$this->joindate,$this->validationc,$this->ulevel,$this->gender,$this->description);
            if($stmt->execute())
            {
                echo $this->name;
                return true;
            }
            else
            {
                echo $stmt->error;
                return $stmt->error;
            }
		}
		else
		 {
            return $this->con->error;

        }

        
		//echo $this->con->error;
        //return false;
    }

    public function AddReceptionist()
    {
        $checkSql = "select email from employee where email=?;";
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

        $sql = "insert into employee(name,email,tpno,password,userLevel) VALUES(?,?,?,?,?)";
        if($stmt = $this->con->prepare($sql))
        {
            $stmt->bind_param("sssss",$this->name,$this->email,$this->tpno,$this->password
                ,$this->ulevel);
            if($stmt->execute())
            {
                return true;
            }
            else
            {
                return $stmt->error;
            }
        }
        else
        {
            return $this->con->error;

        }


        //echo $this->con->error;
        //return false;
    }


    public function uploadPhoto($id,$fileName)
    {
        /*$fileName = $_FILES['upload']['name']."".md5(time());
        $url = "../img/profilepic/".$fileName;
        if(move_uploaded_file($tmpName,$url))*/

            $dbFile = "img/profilepic/".$fileName;
            $sql = "update employee set propic=? where id=?;";
            $stmt = $this->con->prepare($sql);
            $stmt->bind_param("ss",$dbFile,$id);
            if($stmt->execute())
            {
                return true;
            }
            return false;


    }


    public function updateEmployee($id)
    {
        $checkSql = "select email from employee where email=?;";
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

        $sql = "update employee set name=?,tpno=?,email=?,address=?,joindate=?,NIC=?,gender=?,userlevel=?,description=? where id=?;";
        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            $stmt->bind_param("ssssssssss",$this->name,$this->tpno,$this->email,$this->address,$this->joindate,$this->nic
            ,$this->gender,$this->ulevel,$this->description,$id);
            if($stmt->execute() && $stmt->affected_rows>0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function updateEmployeeSelf($id)
    {
        $sql = "update employee set name=?,tpno=?,email=?,address=?,NIC=?,gender=? where id=?;";
        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            $stmt->bind_param("sssssss",$this->name,$this->tpno,$this->email,$this->address,$this->nic
                ,$this->gender,$id);
            if($stmt->execute() && $stmt->affected_rows>0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function updateReceptionist($id)
    {
        $sql = "update employee set name=?,tpno=?,email=? where id=?;";
        $stmt = $this->con->prepare($sql);
        if($stmt)
        {
            $stmt->bind_param("ssss",$this->name,$this->tpno,$this->email,$id);
            if($stmt->execute() && $stmt->affected_rows>0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function ChangePassword($id)
    {
        $sql = "update employee set password=?,passw=? where employee.id=?;";
        $stmt = $this->con->prepare($sql);
        $hashPassword = md5($this->password);
        $stmt->bind_param("sss",$hashPassword,$this->password,$id);
        if($stmt->execute())
        {
            return true;
        }
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

    public function getAll($type)
    {
        if($type=="B")
        {
            $sql = "select id,NIC,name,tpno,email,address,gender,joindate,description,userLevel from employee where userLevel='B';";


            //$result = mysqli_query($this->con, $sql);
            if ($stmt = $this->con->prepare($sql))
            {
                if ($stmt->execute())
                {
                    return $stmt;
                }

            }
        }
        if($type=="R")
        {
            $sql = "select id,name,tpno,email from employee where userLevel='R';";


            //$result = mysqli_query($this->con, $sql);
            if ($stmt = $this->con->prepare($sql))
            {
                if ($stmt->execute())
                {
                    return $stmt;
                }

            }
        }
        return null;
    }

    public function removeEmployee($id)
    {
        $sql = "delete from employee where id=?;";
        if($stmt = $this->con->prepare($sql))
        {
            $stmt->bind_param("s",$id);
            if($stmt->execute() && $stmt->affected_rows>0)
            {
                return true;
            }
            else
            {
                return $stmt;
            }
        }
        return false;
    }

    public function Delete($id)
    {
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

    public function getBeauticians()
    {
        $sql = "select id,name from employee;";
        if($stmt=$this->con->prepare($sql))
        {
            if($stmt->execute())
            {
                return $stmt;
            }
        }
        return null;
    }

}
