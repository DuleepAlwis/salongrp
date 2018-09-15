<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="">
<?php
include "layout/ReceptionistLayout.php";
include "../controller/StockController.php";

?>
<div class="container-fluid">

    <div class="row mt-3">


        <div class="col-md-8">
            <h1 align="center">Appointments</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                    <caption>List of Appointments</caption>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">

                        <th scope="col">Appointment No</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Service</th>
                        <th scope="col">Price</th>
                        <th scope="col">Beautician</th>

                    </tr>
                    </thead>
                    <tbody>
                    <!--<//?php
                    if(($result=getAll())!=null)
                    {
                        $result->bind_result($id,$name,$quantity,$cquantity,$brand,$price);
                        while($result->fetch())
                        {
                            echo "<tr><th scope='row'>".$id."</th><td>".$name."</td><td>".$brand."</td><td><input type='number' id='$id' value='$cquantity' min='0' size='7' maxlength='7' width='7' style='width: 57px'><button type='button' onclick='itemQuantity($id)'>Update</button>"."</td><td>
                                    ".$price."</td></tr>";
                        }

                    }
                    ?>-->

                    </tbody>

                </table>
            </div>
        </div>
            <div class="col-md-4">
                <form>
                    <div class="form-row">
                        <div class="col-4">
                            Select the date:
                            <input type="date" class="form-control">
                        </div>
                        <div class="col-1"></div>
                        <div class="col-5">
                            Select the beautician:
                            <select id="employee"><option>ABC1111</option><option>ABC11111</option><option>ABC1111</option></select>
                        </div>
                        <div class="col-2">
                            <input type="submit" name="vAppointment" value="view">
                        </div>
                    </div>
                </form>
                <div class="mt-5 msgBox">
                    <ul id="postponel"></ul>
                </div>
            </div>

    </div>


    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/Receptionist.js"></script>

</body>
