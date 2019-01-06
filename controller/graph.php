<?php
include "../model/charts.php";


$chart_data='';
$gA = new charts();
$result=$gA->getAppointments($_POST["fdate"],$_POST["tdate"]);
if($result!=null) {


    $result->bind_result($serviceid, $sumPrice);
    while ($result->fetch()) {
        $chart_data .= "{ service:'".$serviceid."', profit:".$sumPrice."}, ";

    }
    $chart_data = substr($chart_data, 0, -2);
}
$chart_data2='';
$gA = new charts();
$result=$gA->getproduct($_POST["fdate"],$_POST["tdate"]);
if($result!=null) {


    $result->bind_result($serviceid, $sumPrice);
    while ($result->fetch()) {
        $chart_data2 .= "{ service:'".$serviceid."', profit:".$sumPrice."}, ";

    }
    $chart_data2 = substr($chart_data2, 0, -2);
}
include "../views/chart1.php";



