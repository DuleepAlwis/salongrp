<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 9/25/18
 * Time: 1:03 AM
 */

if(file_exists("../../model/Service.php"))
{
    require_once( "../../model/Database.php");
    require_once( "../../model/Service.php");
}
else
{
    die("File not found");

}


function AddService()
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $service = new Service();
        $service->name = $_POST["Name"];
        $service->price = $_POST["price"];
        $service->duration = $_POST["Duration"];
        return $service->AddService();
    }
}

function UpdateService($id)
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $service = new Service();
        $service->name = $_POST["editName"];
        $service->price = $_POST["editPrice"];
        $service->duration = $_POST["editDuration"];
        return $service->UpdateService($id);
    }
}

function getServices()
{
    $services = new Service();
    return $services->getServices();
}

