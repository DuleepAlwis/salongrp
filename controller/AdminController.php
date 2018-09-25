<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/15/2018
 * Time: 6:23 PM
 */

include "../model/Database.php";
include "../model/Employee.php";

function AddEmployee()
{
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $employee = new Employee();
        $employee->name = testInput($_POST["Name"]);
        $employee->tpno = testInput($_POST["Contact"]);
        $employee->email = testInput($_POST["Email"]);
        $employee->password = md5(testInput($_POST["Password"]));
        $employee->address = testInput($_POST["Address"]);
        $employee->joindate = testInput($_POST["jdate"]);
        $employee->nic = testInput($_POST["NIC"]);
        $employee->gender = $_POST["gender"];
        $employee->ulevel = $_POST["ulevel"];

        if ($employee->AddEmployee())
        {

            return true;
        }
    }
    return false;

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

    return $data;
}
function RemoveItem($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stock = new Stock();

        if ($stock->RemoveItem($id)) {
            return true;
        } else {
            return false;
        }
    }
}

function getAll()
{

    $employee = new Employee();

    if($employee->getAll()!=null)
    {

        return $employee->getAll();
    }
    else
    {
        echo "wrong";
        return null;
    }

}
