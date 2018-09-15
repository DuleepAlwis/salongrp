<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/14/2018
 * Time: 7:48 PM
 */

include "Database.php";

class Login
{
    public $con = null;
    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function userLogin($uname,$password)
    {

        $sqlCustomer = "select * from salon.customer where email=? and password=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $stmt->bind_param('ss',$uname,md5($password));
        if($stmt->execute())
        {
            session_start();
            $_SESSION["username"] = $uname;
            return true;
        }
        else {
            $sqlEmployee = "select * from salon.employee where email=? and password=?;";
            $stmt = $this->con->prepare($sqlEmployee);
            $stmt->bind_param('ss', $uname, md5($password));
            if ($stmt->execute())
            {
                session_start();
                $_SESSION["username"] = $uname;
                return true;
            }
            else
            {
                return false;
            }
        }
    }

    public function userActivate($uname,$validationc)
    {
        $sqlCustomer = "select * from salon.customer where email=? and validationcode=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $stmt->bind_param('ss',$uname,$validationc);
        if($stmt->execute())
        {
            session_start();
            $_SESSION["username"] = $uname;
            return true;
        }
        else
        {
            $sqlEmployee = "select * from salon.employee where email=? and validationcode=?;";
            $stmt = $this->con->prepare($sqlEmployee);
            $stmt->bind_param('ss',$uname,$validationc);
            if($stmt->execute())
            {
                session_start();
                $_SESSION["username"] = $uname;
                return true;
            }
            else
            {
                return false;
            }

        }
    }
}