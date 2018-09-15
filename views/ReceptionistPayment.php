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
<body class="" onload="stockRequest()">
<?php
include "layout/ReceptionistLayout.php";
include "../controller/StockController.php";

?>
<div class="container-fluid">

    <div class="row mt-3">

        <div class="col-md-3">
            <div class="appointment-box">

            </div>
        </div>
        <div class="col-md-6">
            <h1 align="center">Payment</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                    <caption>List of Items in the stock</caption>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">

                        <th scope="col">Code</th>
                        <th scope="col">Name</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Current Quantity</th>
                        <th scope="col">Price(1 unit in Rs.)</th>
                        <th scope="col">PreOrder Level</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if(($result=getAll())!=null)
                    {
                        $result->bind_result($id,$name,$quantity,$cquantity,$brand,$price,$preOrder);
                        while($result->fetch())
                        {
                            echo "<tr><th scope='row'>".$id."</th><td>".$name."</td><td>".$brand."</td><td><input type='number' id='$id' value='$cquantity' min='0' size='7' maxlength='7' width='7' style='width: 57px'><button type='button' onclick='itemQuantity($id)'>Update</button>"."</td><td>
                                    ".$price."</td><td>".$preOrder."</td></tr>";
                        }

                    }
                    ?>

                    </tbody>

                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>


    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/Receptionist.js"></script>

</body>
</html>