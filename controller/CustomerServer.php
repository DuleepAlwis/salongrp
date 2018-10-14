<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/14/18
 * Time: 7:09 PM
 */

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch($_POST["number"])
    {
        case "1":getBeautician();break;
        case "2":getServices();break;
    }
}

function getBeautician()
{
    $beautician = new Employee();
    return $beautician->getBeautician();
}

function getServices()
{
    $service = new Service();

}
