<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 9/25/18
 * Time: 1:03 AM
 */

if(file_exists("../../model/Services.php"))
{
    include "../../model/Database.php";
    include "../../model/Services.php";
}
else
{
    die("File not found");

}

function getServices()
{
    $services = new Service();
    return $services->getServices();
}
