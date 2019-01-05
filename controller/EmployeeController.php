<?php

if(file_exists("../../model/Employee.php"))
{
    require_once( "../../model/Database.php");
    require_once( "../../model/Employee.php");
}

if(file_exists("model/RatingsFeedback.php"))
{
    require_once("model/Database.php");
    require_once("model/RatingsFeedback.php");
}

function AddEmployee()
{
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $employee = new Employee();
        $employee->name = testInput($_POST["Name"]);
        $employee->tpno = testInput($_POST["Contact"]);
        $employee->email = testInput($_POST["Email"]);
        $employee->password = md5(testInput($_POST["Password"]));
        $employee->passw = $_POST["Password"];
        $employee->address = testInput($_POST["Address"]);
        $employee->joindate = testInput($_POST["jdate"]);
        $employee->nic = testInput($_POST["NIC"]);
        $employee->gender = $_POST["gender"];
        $employee->ulevel = $_POST["ulevel"];
        $employee->description = $_POST["description"];
        $result = $employee->AddEmployee();
        return $result;

    }
    return false;

}

function AddReceptionist()
{
    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $employee = new Employee();
        $employee->name = testInput($_POST["Name"]);
        $employee->tpno = testInput($_POST["Contact"]);
        $employee->email = testInput($_POST["Email"]);
        $employee->password = md5($_POST["Password"]);
        $employee->passw = $_POST["Password"];

        $employee->ulevel = "R";
        $result = $employee->AddReceptionist();
        return $result;

    }
    return false;
}


function updateEmployee($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $employee = new Employee();
        $employee->name = testInput($_POST["editName"]);
        $employee->tpno = testInput($_POST["editContact"]);
        $employee->email = testInput($_POST["editEmail"]);
        //$employee->password = md5(testInput($_POST["Password"]));
        $employee->address = testInput($_POST["editAddress"]);
        $employee->nic = testInput($_POST["editNIC"]);
        $employee->gender = $_POST["editGender"];
        if(array_key_exists("editJDate",$_POST))
        {
            $employee->joindate = testInput($_POST["editJdate"]);
            $employee->ulevel = $_POST["editUlevel"];
            $employee->description = $_POST["editDescription"];
        }

        $result = $employee->UpdateEmployeeSelf($id);
        if($result)
        {
            $_SESSION = array('id'=>$id,'name'=>$_POST["editName"],'tpno'=>$_POST["editContact"],'email'=>$_POST["editEmail"],
                'address'=>$_POST["editAddress"],
                'hashPassword'=>$_SESSION["hashPassword"],'passw'=>$_SESSION["passw"],'nic'=>$_POST["editNIC"],'gender'=>$_POST["editGender"],'propic'=>$_SESSION['propic']);
            return true;
        }
        echo $result;
        return false;

    }
}


function updateReceptionist($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $employee = new Employee();
        $employee->name = testInput($_POST["editName"]);
        $employee->tpno = testInput($_POST["editContact"]);
        $employee->email = testInput($_POST["editEmail"]);
        //$employee->password = md5(testInput($_POST["Password"]));

        $result = $employee->updateReceptionist($id);
        return $result;
    }
}

function ChangePassword($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $employee = new Employee();

        if ($_SESSION["passw"] == $_POST["cpassword"]){
            $employee->password = $_POST["password"];
            if($_POST["password"] == $_POST["rpassword"]){
                if($employee->ChangePassword($_SESSION["id"]))
                {
                    $_SESSION["passw"] = $_POST["password"];
                    return true;
                }
                else
                {
                    return false;
                }
            }
        }
    }

}

function uploadPhoto($id)
{
    if($_FILES["upload"]["error"]==0)
    {
        $employee = new Employee();
        $tmpName = $_FILES["upload"]["tmp_name"];
        $i = 0;
        switch($_FILES["upload"]["type"])
        {
            case "image/jpeg":$i=1;break;
            case "image/png":$i=1;break;
            default:$i=0;return "File type should be jpeg or png";break;
        }

        if($i==1)
        {
            $fileName = md5(time())."".$_FILES['upload']['name'];
            $url = "../../img/profilepic/".$fileName;
            if(move_uploaded_file($tmpName,$url))
            {
                if($employee->uploadPhoto($id,$fileName))
                {
                    $_SESSION["propic"] = "img/profilepic/".$fileName;
                    return true;
                }
            }



        }

        return false;
    }
}


function getEmployeeRatings()
{
    $empRatings = new RatingsFeedback();
    return $empRatings->getEmployees();
}

function getReceptionist()
{
    $employee = new Employee();
    $result = $employee->getAll("R");
    if($result!=null)
    {

        return $result;
    }
    else
    {
        return null;
    }
}

function getEmployees($type)
{

    $employee = new Employee();
    $result = $employee->getAll($type);
    if($result!=null)
    {

        return $result;
    }
    else
    {
        return null;
    }

}

function testInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    //echo $data."123";
    return $data;
}


