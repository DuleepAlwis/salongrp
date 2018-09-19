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
<?php include "layout/ReceptionistLayout.php"; ?>
<?php  include "../controller/StockController.php"; ?>

<div class="container-fluid">

    <div class="row mt-3">

           <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 align="center">Stock</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                        <caption>List of Items in the stock</caption>
                        <thead>
                        <tr style="position:sticky;background-color: #01549b">


                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Current Quantity</th>
                            <th scope="col">Price(1 unit)Rs.</th>
                            <th scope="col">PreOrderLevel</th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">
                        <?php
                            if(($result=getAll())!=null)
                            {
<<<<<<< HEAD
=======
                                

<<<<<<< HEAD
                                $result->bind_result($id,$name,$quantity,$brand,$price,$preOrderl);
=======
>>>>>>> 54a2114fdd0765d76bc7c4558ab73bf29229f497
                                $result->bind_result($id,$name,$quantity,$currentq,$brand,$price,$preOrderl,$code);
>>>>>>> 3fd175b997b7835306557687bb8412d9a37cb842
                                while($result->fetch())
                                {
                                    echo "<tr><th scope='row'>".$name."</th><td>".$brand."</td><td>".
                                    "<input type='number' id='$id' value='$quantity' style='width:67px'><input type='button' onclick='updateItem($id)' value='Update' style='width:67px;border-radius: 3px'></td><td>".$price."</td><td>".$preOrderl."</td></tr>";
                                }
                            }
<<<<<<< HEAD
=======
                            
>>>>>>> 54a2114fdd0765d76bc7c4558ab73bf29229f497

                            ?>

                        </tbody>

                </table>
            </div>
        </div>
        </div>


    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Receptionist.js"></script>
    </body>
</html>