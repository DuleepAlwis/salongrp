<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:27 PM
 */

class CustomerHelp
{
    public $customerId;
    public $question;
    public $answer;
    public $state;
    public $timestamp;
    public $time;
    private $con;

    public function __construct()
    {
        $this->con = Database::getConnection();
    }

    public function getCustomers()
    {
        $sql = "select name,id from customer;";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt;
    }

    public function getMessages($customerid)
    {
        $sql = "select description,time,msgFrom from messages where customerid=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$customerid);
        $stmt->execute();
        return $stmt;
    }

    public function saveMessage($customerid,$msg,$from)
    {
        $sql = "insert into messages(customerid,description,time,state,msgFrom) values(?,?,?,?,?);";
        $stmt = $this->con->prepare($sql);
        $this->state = 0;
        //$this->timestamp = microtime();

        $this->time = date("Y-m-d H:i:s");
        $stmt->bind_param("sssss",$customerid,$msg,$this->time,$this->state,$from);
        $stmt->execute();
    }


    public function unreadMessages()
    {
        $sql = "select customerid,count(state) from messages where state='0' group by customerid;";
        $stmt = $this->con->prepare($sql);
        $stmt->execute();
        return $stmt;
    }



}
