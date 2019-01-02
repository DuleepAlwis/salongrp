<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 1/1/2019
 * Time: 4:39 PM
 */

class RatingsFeedback
{
    public $id;
    public $rateValue;
    public $employee;
    public $feedback;
    protected $con;

    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function addComment()
    {
        $sql = "insert into ratings(employee, ratevalue, feedback) values(?,?,?);";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("sss",$this->employee,$this->rateValue,$this->feedback);
        if($stmt->execute())
        {
            return true;
        }
        return false;
    }

    public function getComment($id)
    {
        $sql = "select ratings.id,employee.name,ratevalue,feedback from ratings,employee where ratings.employee=? and employee.id=ratings.employee;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$id);
        if($stmt->execute())
        {
            return $stmt;
        }
        return null;
    }

    public function getEmployees()
    {
        $sql = "select emp.name as name,emp.propic as location,sum(ratings.ratevalue) as ratevalue from ratings,employee as emp where emp.id=ratings.employee group by ratings.employee;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {
            return $stmt;
        }
        return null;
    }
}