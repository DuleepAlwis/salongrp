<?php

require_once "../model/Database.php";
require_once "../model/Stock.php";
require_once "../model/Employee.php";
require_once "../model/Payment.php";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    switch ($_POST["number"])
    {
        case "1":UpdateStock($_POST["Id"],$_POST["q"]);break;
        case "2": getBeauticians();break;
        case "3":AppointmentPay($_POST["id"],$_POST["price"]);break;
        case "4":if($result=NonAppointmentPay($_POST["Serviceid"],$_POST["beauticianid"],$_POST["price"],$_POST["date"],$_POST["time"]))
        {
            echo json_encode([$result]);

        }
        else
        {
            echo json_encode([$result]);
        }
        break;
        case "5":if($result=PurchasePay($_POST["Productid"],$_POST["quantity"],$_POST["price"],$_POST["date"],$_POST["time"]))
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
function getBeauticians()
{
    $employee = new Employee();

    if (($result = $employee->getBeauticians("B")) != null) {
        $emp = array();
        $result->bind_result($id, $name);
        $i = 0;
        while ($result->fetch()) {
            $emp[$id] = $name;
        }
        echo json_encode([true, $emp]);


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

function NonAppointmentPay($serviceid,$beauticianid,$price,$date,$time)
{
    $payment = new Payment();
    if($result = $payment->NonAppointmentInsert($serviceid,$beauticianid,$price,$date,$time))
    {
        return $result;
    }
    else
    {
        return $result;
    }

}

function PurchasePay($productid,$quantity,$price,$date,$time)
{
    $payment = new Payment();
    if($result=$payment->ProductInsert($productid,$quantity,$price,$date,$time))
    {
        if($result>0)
        {
            return $result;
        }

    }
    else
    {
        return $result;
    }
}
?>

