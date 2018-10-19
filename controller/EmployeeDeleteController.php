<?php
include "../model/Employee.php";
$em = new Employee();
if($em->Delete($_POST["id"])){
    echo "successfully deleted";

}
