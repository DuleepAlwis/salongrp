<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/15/2018
 * Time: 12:57 PM
 */

include "Database.php";
class Login
{
    protected $con = null;
    public function __Construct()
    {
        $this->con = Database::getConnection();
    }

    public function logUser($uname,$password)
    {
        $sqlCustomer = "select email from customer where email=? and password=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $stmt->bind_param("ss",$uname,$password);
        if($stmt->execute())
        {
            session_start();
            $_SESSION['uname'] = $uname;
        }
        else
        {
            $sqlEmployee = "select email from salon.employee where email=? and password=?;";
            $stmt = $this->con->prepare($sqlCustomer);
            $stmt->bind_param("ss",$uname,$password);
            if($stmt->execute())
            {
                session_start();
                $_SESSION['uname'] = $uname;
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function confirmUserr($uname,$validatec)
    {
        $num = 0;
        $sqlCustomer = "select email from customer where email=? and validationcode=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $stmt->bind_param("ss",$uname,$validatec);
        if($stmt->execute())
        {
            $sqlCustomer = "update customer set validationcode=? where email=?;";
            $stmt = $this->con->prepare($sqlCustomer);
            $stmt->bind_param("ss",$num,$email);
            $stmt->execute();
            session_start();
            $_SESSION['uname'] = $uname;
        }
        else
        {
            $sqlEmployee = "select email from salon.employee where email=? and validationcode=?;";
            $stmt = $this->con->prepare($sqlCustomer);
            $stmt->bind_param("ss",$uname,$password);
            if($stmt->execute())
            {
                $sqlCustomer = "update employee set validationcode=? where email=?;";
                $stmt = $this->con->prepare($sqlCustomer);
                $stmt->bind_param("ss",$num,$email);
                $stmt->execute();
                session_start();
                $_SESSION['uname'] = $uname;
                return true;
            }
            else
            {
                return false;
            }
        }
    }


}