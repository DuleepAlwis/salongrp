<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/14/18
 * Time: 7:09 PM
 */

require_once "../model/Database.php";
require_once "../model/Employee.php";
require_once "../model/Services.php";

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
    $result = $beautician->getBeauticians();
    $arr = array();
    $i = 0;
    if($result)
    {

        $result->bind_result($id,$name);
        while($result->fetch())
        {
            $arr[$id] = $name;
            $i = $i+1;
        }
        echo json_encode([true,$arr]);
    }
    else
    {
        echo json_encode([false]);
    }


}

function getServices()
{
    $service = new Service();

}
