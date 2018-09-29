<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 9/27/18
 * Time: 12:03 AM
 */

require "../PDFReport/fpdf.php";
class Report extends FPDF
{
    protected $con = null;

    function __construct()
    {
        FPDF::__construct();
        $this->con = Database::getConnection();
    }

    function getAppointmentRevenues($date)
    {
        $sql = "select sum(price) from appointmentpay where date=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$date);
        $stmt->execute();
        if($stmt->affected_rows>0)
        {
            return $stmt;
        }
        else
        {
            return null;
        }
    }

    function getNAppointmentRevenues($date)
    {
        $sql = "select sum(price) from nonappointmentpay where date=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$date);
        $stmt->execute();
        if($stmt->affected_rows>0)
        {
            return $stmt;
        }
        else
        {
            return null;
        }
    }

    function getStockRevenues($date)
    {
        $sql = "select sum(price) from purchasepay where date=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$date);
        $stmt->execute();
        if($stmt->affected_rows>0)
        {
            return $stmt;
        }
        else
        {
            return null;
        }
    }

    function getSellItems($date)
    {
        $sql = "select stock.name,purchaseitem.quantity from purchaseitem,stock where purchaseitem.itemid=stock.itemid and purchaseitem.date=?;";
        $stmt = $this->con->prepare($sql);
        $stmt->bind_param("s",$date);
        $stmt->execute();
        if($stmt->affected_rows>0)
        {
            return $stmt;
        }
        else
        {
            return null;
        }
    }

    function generateDailyReport($date)
    {
        $report  = new FPDF();

        $report->AddPage();
        $this->ReportTitle($report,"Stock and Revenue Report for "+date("y/m/d"));
        $report->SetFont('Arial','B',16);

        //Appointment Revenue details
        $appointmenr = $this->getAppointmentRevenues($date);
        $appointmenr->bind_result($revenue1);
        if($appointmenr!=null)
        {
            $appointmentrevenue = $appointmenr->fetch();
        }
        $report->cell(10,3,"Revenues gained by Appointments        :- "+$revenue1,0,2,L,false);

        //Non Appointment revenue details
        $Nonappointmenr = $this->getNAppointmentRevenues($date);
        $Nonappointmenr->bind_result($revenue2);
        if($Nonappointmenr!=null)
        {
            $Nonappointmentrevenue = $Nonappointmenr->fetch();
        }
        $report->cell(10,3,"Revenues gained by Non Appointment Services  :- "+$revenue2,0,2,L,false);


        //Sold Stock
        $report->cell(10,3,"Sold items of the stock ",0,2,L,false);
        $report->Cell(40,7,"Item",1);
        $report->Cell(40,7,"Quantity",1);
        $report->Ln();
        $products = $this->getSellItems($date);
        $products->bind_result($name,$quantity);
        if($products!=null)
        {
            while(($result=$products->fetch())!=null)
            {
                $report->Cell(40,7,$name,1);
                $report->Cell(40,7,$quantity,1);
                $report->Ln();
            }
        }
        $report->Output();
    }

    function ReportTitle($report, $label)
    {
        $report->Image("../img/icons/img13.png",10,6,30);
        // Arial 12
        $report->SetFont('Arial','',12);
        // Background color
        $report->SetFillColor(200,220,255);
        // Title
        $report->Cell(0,6, $label,0,1,'C',true);
        // Line break
        $report->Ln(20);
    }

    function ReportBody($file)
    {
        // Read text file
        $txt = file_get_contents($file);
        // Times 12
        $this->SetFont('Times','',12);
        // Output justified text
        $this->MultiCell(0,5,$txt);
        // Line break
        $this->Ln();
        // Mention in italics
        $this->SetFont('','I');
        $this->Cell(0,5,'(end of excerpt)');
    }
}
