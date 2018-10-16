<?php

include "../model/Database.php";
include "../model/Stock.php";
include "../model/Employee.php";
include "../model/Payment.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch ($_POST["number"])
    {
        case "1":UpdateStock($_POST["Id"],$_POST["q"]);break;
        case "2": getBeautcians();break;
        case "3":AppointmentPay($_POST["id"],$_POST["price"]);break;
        case "4":NonAppointmentPay($_POST["Serviceid"],$_POST["beauticianid"],$_POST["price"]);break;
        case "5":if($result=PurchasePay($_POST["Productid"],$_POST["quantity"],$_POST["price"]))
        {
            echo json_encode([$result]);
        }
        else
        {
            echo json_encode([$result]);
        }
        break;
    }

}

//Number 1 for Update Stock
function UpdateStock($id,$quantity)
{
    $stock = new Stock();
    if($stock->UpdateItem($_POST["Id"],$_POST["q"]))
    {
        echo "OK".$_POST["q"];
        return true;
    }
    else
    {
        return false;
    }
}

//Number 2 for getBeauticans
function getBeautcians()
{
    $employee = new Employee();

    if (($result = $employee->getBeautician()) != null) {
        $emp = array();
        $result->bind_result($id, $name);
        $i = 0;
        while ($result->fetch())
        {
            $emp[$id] = $name;
        }
        echo json_encode([true, $emp]);
        return;

    } else {
        echo json_encode([false, null]);
    }
}

function AppointmentPay($id,$price)
{
    $payment = new Payment();
    if($payment->AppointmentInsert($id,$price))
    {
        return true;
    }
    else
    {
        return false;
    }
}

function NonAppointmentPay($serviceid,$beauticianid,$price)
{
    $payment = new Payment();
    if($payment->NonAppointmentInsert($serviceid,$beauticianid,$price))
    {
        return true;
    }
    else
    {
        return false;
    }

}

function PurchasePay($productid,$quantity,$price)
{
    $payment = new Payment();
    if($result=$payment->ProductInsert($productid,$quantity,$price))
    {
        return $result;
    }
    else
    {
        return $result;
    }
}
?>

