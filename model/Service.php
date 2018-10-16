<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:48 PM
 */


class Service
{

    public $serviceId;
    public $name;
    public $price;
    public $duration;
    public $con;

    /**
     * @return mixed
     */
    public function __construct()
    {

        $this->con = Database::getConnection();
    }

    public function getServices()
    {
        $sql = "select id,name,price,duration from services;";
        $stmt = $this->con->prepare($sql);
        if($stmt->execute())
        {
            return $stmt;
        }
        return null;
    }


}
