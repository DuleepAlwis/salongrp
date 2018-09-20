<?php 

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
function getAll()
{

        $employee = new Employee();

        return $employee->getAll();

}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //echo $data."123";
    return $data;
}


