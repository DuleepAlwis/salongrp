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
<?php include "layout/ReceptionistLayout.php" ?>
<div class="container-fluid">

    <div class="row mt-3">

           
        <div class="col">
            <h1 align="center">Stock</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                        <caption>List of Items in the stock</caption>
                        <thead>
                        <tr style="position:sticky;background-color: #01549b">

                            <th scope="col">Code</th>
                            <th scope="col">Name</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Current Quantity</th>
                            <th scope="col">Price(1 unit)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                        </tbody>

                </table>
            </div>
        </div>
        </div>
    <div class="row">

            <div class="col">
                <a href="ReceptionistHome.php"><span class="homeBtn"></span></a><span style="width:100px;display:inline-block"></span><a href="../index.php"><span class="logoutBtn"></span></a>

                <form name="stockitems" method="get" action="">
                    <div class="form-group">
                        <label for="iCode">Item Code</label>
                        <input type="text" class="form-control" id="iCode"  placeholder="000">

                    </div>
                    <div class="form-group">
                        <label for="iName">Name</label>
                        <input type="text" class="form-control" id="iName" placeholder="Item name">
                    </div>
                    <div class="form-group">
                        <label for="iQuantity">Quantity</label>
                        <input type="number" min="0" class="form-control" id="iQuantity" placeholder="Quantity">
                    </div>


                    <button type="submit" class="btn btn-primary mr-3">Update</button><button type="reset" class="btn btn-primary">Cancel</button>
                </form>
            </div>
        

    </div>

    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


</body>
</html>