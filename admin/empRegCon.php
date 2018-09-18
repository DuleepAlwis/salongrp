<?php
/**
 * Created by PhpStorm.
 * User: Noob
 * Date: 9/15/2018
 * Time: 10:32 AM
 */

include("test_input.php");
include("empRegModel.php");

$test = new test_input();
$allwell=true;

//error msgs
$idErr = $nameErr = $genderErr = $tpnoErr = $emailErr = $addressErr	= $joindateErr = $passwordErr = $salaryErr = " ";
//
$id = $name = $gender = $tpno = $email = $address	= $joindate = $password = $salary = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["id"])) {
        $allwell=false;
    } else {
        $id = $test->t_input($_POST["id"]);
    }
    if (empty($_POST["name"])) {
        $allwell=false;
    } else {
        $name = $test->t_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $allwell=false;
    } else {
        $email = $test->t_input($_POST["email"]);
    }

    if (empty($_POST["password"])) {
        $allwell=false;
    } else {
        if($_POST["password"] != $_POST["passwordverify"]){
            $allwell=false;
            $passwordErr = $_POST["passwordverify"];
        }
        else {
            $password = $test->t_input($_POST["password"]);
        }
    }

    if (empty($_POST["gender"])) {
        $allwell=false;
    } else {
        $gender = $test->t_input($_POST["gender"]);
    }
    if (empty($_POST["mobile"])) {
        $allwell=false;
    }
    else{
        if(!is_numeric($_POST["mobile"])){
            $allwell=false;
            $tpnoErr="not valid ";
        }
        elseif (strlen($_POST["mobile"])!=10) {
            $allwell = false;
            $tpnoErr = "require 10 digits";
        }
        else {
            $tpno = $test->t_input($_POST["mobile"]);
        }
    }
    if (empty($_POST["address"])) {
        $allwell=false;
    } else {
        $address = $test->t_input($_POST["address"]);
    }
    if (empty($_POST["salary"])) {
        $allwell=false;
    } else {
        $salary = $test->t_input($_POST["salary"]);
    }
    if (empty($_POST["jDate"])) {
        $allwell=false;
    } else {
        $joindate = $test->t_input($_POST["jDate"]);
    }
}
if ($allwell==false){
include ('registration.php');}
else{
    $erm = new empRegModel();
    $erm->setId($id);
    $erm->setName($name);
    $erm->setAddress($address);
    $erm->setEmail($email);
    $erm->setJdate($joindate);
    $erm->setSalary($salary);
    $erm->setTpno($tpno);
    $erm->setPassword($password);
    $erm->setGender($gender);

    $erm->insertData();



}



