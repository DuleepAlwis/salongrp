<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/3/2018
 * Time: 12:33 AM
 */
include "model/Customer.php";
function Addcustomer()
{

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {

        $customer = new Customer();
        $customer->name = testInput($_POST["Name"]);
        $customer->tpno = testInput($_POST["Contact"]);
        $customer->email = testInput($_POST["Email"]);
        $customer->password = md5(testInput($_POST["Password"]));
        $customer->address = testInput($_POST["Address"]);
        $customer->city = testInput($_POST["City"]);
        $customer->district = testInput($_POST["District"]);
        //$m = (int)microtime();
        //echo ($_POST["Name"]+" ");

        $customer->validationc = md5($customer->name,microtime());


            $email = $customer->email;
            $validationc = $customer->validationc;
            $subject = "Activation Link";
            $msg = "Please click the link below to activate your account
                  https://localhost/controller/ConfirmUser.php?uname=$email&code=$validationc";
            $header = "From: noreply@duleepalwis@gmail.com";
            //ini_set('SMTP','localhost');
            //ini_set('smtp_port',25);
            /*if(sendEmail($email,$subject,$msg,$header))
            {
                if($customer->AddCustomer())
                {
                    return true;
                }
            }*/
            //return true;
            if($customer->AddCustomer())
            {
                return true;
            }
        return false;
    }

    
}

function sendEmail($email,$subject,$msg,$headers)
{

    try
    {
        if(mail($email,$subject,$msg,$headers))
        {
            echo "aaaaaaaaa11223";
            return true;
        }
    }
    catch (Exception $ex)
    {
        echo $ex;
    }
    echo "wrong";
    return false;
}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    echo $data."123";
    return $data;
}