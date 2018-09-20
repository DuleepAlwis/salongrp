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
        //Customer Login
        $sqlCustomer = "select id,name,email,address,tpno,password,city,district from customer where email=? and password=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $passw = md5($password);
        $stmt->bind_param("ss",$uname,$passw);
        if($stmt->execute())
        {

            if($stmt!=null) {
                $stmt->bind_result($id, $name, $email, $address, $tpno, $password, $city, $district);
                session_start();

                while ($stmt->fetch()) {
                    $_SESSION = array('id' => $id, 'name' => $name, 'email' => $email, 'address' => $address, 'tpno' => $tpno,
                        'password' => $password, 'city' => $city, 'district' => $district);
                    //Direct to Customer Profile
                    header("Location:../views/CustomerProfile.php");
                    return true;

                }

            }


        }


            //Employee Login

            $sqlEmployee = "select id,name,tpno,email,address,joindate,password,ulevel,NIC from employee where email=? and password=?;";
            $stmt = $this->con->prepare($sqlEmployee);
            $passw = md5($password);
            $stmt->bind_param("ss",$uname,$passw);
            if($stmt->execute())
            {
                if($stmt!=null)
                {

                    $stmt->bind_result($id,$name,$tpno,$email,$address,$jdate,$password,$type,$NIC);
                    while($stmt->fetch())
                    {
                        echo $email;
                        session_start();
                        $_SESSION = array('id'=>$id,'name'=>$name,'tpno'=>$tpno,'email'=>$email,
                            'address'=>$address,'joindate'=>$jdate,
                            'password'=>$password,'nic'=>$NIC);
                        switch($type)
                        {
                            case "Admin": header("Location:../views/AdminProfile.php");
                            case "Receptionist": header("Location:../views/ReceptionstProfile.php");
                            case "Beautician" : header("Location:../views/EmployeeProfile.php");
                        }
                        return true;
                    }
                }



            }
            echo $stmt->affected_rows;
            return false;

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