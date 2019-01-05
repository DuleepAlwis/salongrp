<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/6/18
 * Time: 11:17 PM
 */

if(file_exists("../../model/Database.php"))
{
    require_once("../../model/Database.php");
    require_once("../../model/CustomerHelp.php");
}

if(file_exists("../model/Database.php"))
{
    require_once("../model/Database.php");
    require_once("../model/CustomerHelp.php");
}


function getCustomers()
{
    $customerHelp = new CustomerHelp();
    return $customerHelp->getCustomers();
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{


    if(array_key_exists("number",$_POST))
    {
        switch($_POST["number"])
        {
            case "1":
                getMessages($_POST["Id"]);
                break;
            case "2":
                ReceptionistMessage($_POST["Id"], $_POST["msg"]);
                break;
            case "3":
                CustomerMessage($_POST["Id"], $_POST["msg"]);
                break;
            default:break;
        }
    }


}

function getMessages($customerid)
{
    $customerHelp = new CustomerHelp();
    if($result=$customerHelp->getMessages($customerid))
    {
        $msg = array(array());
        $result->bind_result($description,$time,$msgFrom);
        $i = 0;
        while($result->fetch())
        {
            $msg[$i] = array("description"=>$description,"time"=>$time,"from"=>$msgFrom);
            $i = $i + 1;
        }
        echo json_encode($msg);

    }
    else
    {
        echo json_encode([false]);
    }

}

function ReceptionistMessage($customerid,$msg)
{
    $customerHelp = new CustomerHelp();
    $customerHelp->saveMessage($customerid,$msg,"R");

}

function CustomerMessage($customerid,$msg)
{
    $customerHelp = new CustomerHelp();
    $customerHelp->saveMessage($customerid,$msg,"C");
}



