<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 12/30/2018
 * Time: 11:35 PM
 */

class ServiceEmployee
{
    protected $con = null;
    public $id;
    public $serviceName;
    public $employeeName;

    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function addEmpService()
    {
        $sql = "insert into empservice(employee,service) values(?,?);";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss",$this->employeeName,$this->serviceName);
        if($stmt->execute())
        {
            return true;
        }
        //echo $stmt->error;
        return false;
    }

    public function removeEmpService($employee,$service)
    {

        $sql = "delete from empservice where employee=? and service=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("ss",$employee,$service);
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }

    public function getServiceEmployee()
    {
        $sql = "select employee.name,employee.id,services.name,services.id from empservice,employee,services where employee.id=empservice.employee and services.id=empservice.service;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {

                return $stmt;

        }
        return null;
    }

    public function getAppointmentEmployee($service)
    {
        $sql = "select employee.id,employee.name from employee,empservice where empservice.service=? and employee.id=empservice.employee;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$service);
        if($stmt->execute())
        {
            return $stmt;
        }
        return null;
    }

}