<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/15/2018
 * Time: 12:57 PM
 */

class Login
{
    protected $con = null;
    public function __Construct()
    {
        //$db = new Database();
        $this->con = Database::getConnection();
    }

    public function logUser($uname,$userPassword)
    {
        $hashPassword = md5($userPassword);
        //echo $userPassword;
        //Customer Login
        $sqlCustomer = "select id,name,email,address,tpno,password,passw,city,district,gender from customer where email=? and password=?;";
        $stmt = $this->con->prepare($sqlCustomer);
        $stmt->bind_param("ss",$uname,$hashPassword);


        if($stmt->execute())
        {

            if($stmt!=null) {
                $stmt->bind_result($id, $name, $email, $address, $tpno, $password,$passw, $city, $district,$gender);
                if(isset($_SESSION))
                {
                    session_destroy();
                    session_start();
                }
                else
                {
                    session_start();
                }

                while ($stmt->fetch()) {
                    $_SESSION = array('id' => $id, 'name' => $name, 'email' => $email, 'address' => $address, 'tpno' => $tpno,
                        'hashPassword' => $password,'passw'=>$passw, 'city' => $city, 'district' => $district,'gender'=>$gender);
                    //Direct to Customer Profile
                    //header("Location:../views/Customer/");
//mail("duleepalwis@gmail.com","Success","Great Messages");
                    header("Location:../views/Customer/CustomerProfile.php");
                    return true;

                }

            }


        }


            //Employee Login

        $sqlEmployee = "select id,name,tpno,email,address,joindate,password,passw,userLevel,NIC,gender,propic from employee where email=? and password=?;";// and password=?;";
        $stmt = $this->con->prepare($sqlEmployee);
        //$passw = md5($password);
        //echo $passw;
        $stmt->bind_param("ss",$uname,$hashPassword);
        if($stmt->execute())
        {
            if($stmt!=null)
            {

                $stmt->bind_result($id,$name,$tpno,$email,$address,$jdate,$password,$passw,$type,$NIC,$gender,$propic);
                while($stmt->fetch())
                {
                    echo $email." ".$password." ".$passw." ".$type;
                    if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    else
                    {
                        session_destroy();
                        session_start();
                    }

                    switch($type)
                    {
                        case "A":$_SESSION =  array('id'=>$id,'name'=>$name,'tpno'=>$tpno,'email'=>$email,
                            'address'=>$address,'joindate'=>$jdate,
                            'hashPassword'=>$password,'nic'=>$NIC,'gender'=>$gender,'passw'=>$passw,'propic'=>$propic); header("Location:../views/Admin/");break;
                        case "R": $_SESSION = array('id'=>$id,'name'=>$name,'tpno'=>$tpno,'email'=>$email);echo $type;
                            header("Location:../views/Receptionist/");break;
                        case "B" :
                            $_SESSION = array('id'=>$id,'name'=>$name,'tpno'=>$tpno,'email'=>$email,
                                'address'=>$address,'joindate'=>$jdate,
                                'hashPassword'=>$password,'nic'=>$NIC,'gender'=>$gender,'passw'=>$passw,'propic'=>$propic);header("Location:../views/Beautician/");break;
                    }
                    return true;
                }
            }



        }

        //Admin default login through config file

        $file = "../config.php";
        $credentials = array("user"=>"","password"=>"");
        $i=0;
        //echo $userPassword."1";
        if(file_exists($file))
        {
            $fileStream = fopen($file,"r");
            while(!feof($fileStream) && $i<2)
            {
                $line = fgets($fileStream);

                $arr = explode(":",$line);
                if($arr[0]=="user")
                {
                    $credentials["user"] = $arr[1];
                    $i = $i+1;
                }
                elseif($arr[0]=="password")
                {
                    $credentials["password"] = $arr[1];
                    $i = $i+1;

                }

            }

        }
        //echo $uname." ".$userPassword;
        //print_r($credentials);
        //echo $uname;
        //echo "aaa"=="acx";
        //echo strcmp($credentials['user'],$uname); //." ".$credentials['password'];
        //echo strcmp($credentials['password'],$userPassword);
        //echo $credentials['password']." ".$userPassword;
        //echo strlen($userPassword);
        //echo strcmp($credentials['password'],$userPassword);
        /*if(strlen($uname)>0 && strlen($userPassword)>0 && strcmp($credentials['user'],$uname)>=0 && strcmp($credentials['password'],$userPassword)>=0)
        {

            echo $uname." ".$userPassword;
            if(file_exists("../views/admin/index.php"))
            {
                session_start();
                $_SESSION = array("email"=>$uname,"password"=>$userPassword);
                header("Location:../views/admin/");
                return true;
            }

        }*/

        echo /*$stmt->affected_rows*/" "." ".$stmt->error;
        return false;

    }

    public function confirmUser($uname,$validatec)
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
            $sqlEmployee = "select email from employee where email=? and validationcode=?;";
            $stmt = $this->con->prepare($sqlCustomer);
            $stmt->bind_param("ss",$uname,$password);
            if($stmt->execute())
            {
                $sqlEmployee = "update employee set validationcode=? where email=?;";
                $stmt = $this->con->prepare($sqlEmployee);
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

    public function forgotPassword($email)
    {
        $emailHash = rand(10,1000);
        $dbHash = md5($emailHash);
        
        //Employee forgot email
        $sql = "update employee set passw=?,password=? where email=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sss",$emailHash,$dbHash,$email);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->affected_rows>0)
            {
                mail($email,"This is your new password, use this when you login",$emailHash);
                return true;
            }

        }

        //Customer forgot email
        $sql = "update customer set passw=?,password=? where email=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sss",$emailHash,$dbHash,$email);
        if($stmt->execute())
        {
            $stmt->store_result();
            if($stmt->affected_rows>0)
            {
                mail($email,"This is your new password, use this when you login",$emailHash);
                return true;
            }

        }
        return false;


    }


}
