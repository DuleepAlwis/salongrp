<?php

require_once("../../model/Database.php");
require_once("../../model/Report.php");

$report = new Report();

function getPurchaseRevenue($startDate,$endDate)
{
    $report = new Report();
    return $report->getPurchaseRevenue($startDate,$endDate);
}

function getServiceRevenue($startDate,$endDate)
{
    $report = new Report();
    return $report->getServiceRevenue($startDate,$endDate);
}

function getAppointmentRevenue($startDate,$endDate)
{
    $report = new Report();
    return $report->getAppointmentRevenue($startDate,$endDate);
}
?>