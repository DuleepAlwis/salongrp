<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/3/2018
 * Time: 12:33 AM
 */
if(file_exists( "model/Customer.php"))
{
    require_once( "model/Database.php");
    require_once( "model/Customer.php");
}

if(file_exists("../../model/Customer.php"))
{
    require_once( "../../model/Database.php");
    require_once( "../../model/Customer.php");
}



function Addcustomer()
{

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $customer = new Customer();

        $customer->name = testInput($_POST["Name"]);
        $customer->tpno = testInput($_POST["Mobile"]);
        $customer->email = testInput($_POST["Email"]);
        $customer->password = md5(testInput($_POST["Password"]));
        $customer->passw = $_POST["Password"];
        $customer->address = testInput($_POST["Address"]);
        $customer->gender = testInput($_POST["Gender"]);
        $customer->city = testInput($_POST["City"]);
        $customer->district = testInput($_POST["District"]);
        //$m = (int)microtime();
        //echo ($_POST["Name"]+" ");
        $customer->last_login = date("Y-m-d H:i:s");
        $customer->validationc = md5($customer->name,microtime());
        if($customer->AddCustomer())
        {
            echo $customer->name." ".$customer->city;
            /*$email = $customer->email;
            $validationc = $customer->validationc;
            $subject = "Activation Link";
            $msg = "Please click the link below to activate your account
                  https://localhost/login/activate.php?email=$email&code=$validationc";
            $header = "From: noreply@duleepalwis0@gmail.com";
            ini_set('SMTP','myserver');
            ini_set('smtp_port',25);
            if(sendEmail($email,$subject,$msg,$header))
            {
                return true;
            }*/
            return true;
        }
        echo $customer->name." ".$customer->city." "."!23";
        return false;
    }

    
}

function UpdateCustomer($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $customer = new Customer();
        $customer->id = testInput($id);
        $customer->name = testInput($_POST["Name"]);
        $customer->tpno = testInput($_POST["Mobile"]);
        $customer->email = testInput($_POST["Email"]);
        $customer->address = testInput($_POST["Address"]);
        $customer->city = testInput($_POST["City"]);
        $customer->district = testInput($_POST["District"]);
        $customer->gender = testInput($_POST["Gender"]);
        $result = $customer->UpdateCustomer();
        if($result)
        {
            $_SESSION["name"] = $customer->name ;
            $_SESSION["tpno"] = $customer->tpno ;
            $_SESSION["email"] = $customer->email;
            $_SESSION["address"] = $customer->address;
            $_SESSION["city"] = $customer->city ;
            $_SESSION["district"] = $customer->district;
            $_SESSION["gender"] = $customer->gender;
            return true;
        }
        return $result;
    }
}

function ChangePassword($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $customer = new Customer();
        
        //if ($_SESSION["passw"] == $_POST["cpassword"]){
            $customer->password = $_POST["password"];

            if($_POST["password"] == $_POST["rpassword"]){

                if($customer->ChangePassword($_SESSION["id"]))
                {
                    $_SESSION["passw"] = $_POST["password"];
            //echo $_SESSION["passw"]." "."123";
                    return true;
                }
                else 
                {
                    return false;
                }
            }
        //}
    }
  
}

function getAll()
{
    $customer = new Customer();
    return $customer->getAll();
}

function sendEmail($email,$subject,$msg,$headers)
{
    if(mail($email,$subject,$msg,$headers))
    {
        return true;
    }
    return false;
}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //echo $data."123";
    return $data;
}

?>
