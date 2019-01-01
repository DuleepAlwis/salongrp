<?php include "../controller/StockController.php";?>

<div class="row">
    <div class="col-md-10">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Stock details
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>ID</th>
                            <th>Name</th>

                            <th>Quantity</th>
                            <th>cQuantity</th>
                            <th>Brand</th>
                            <th>Price</th>
                            <th>Pre Order</th>

                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if( ($result = getAll())!=null) {
                            $result->bind_result($id, $name, $quantity, $cQuantity, $brand, $price, $preOrder);
                            while ($result->fetch()) {
                                echo " <tr>
                                <td > $id </td>
                                <td contenteditable id='first_name' data-id1='$id'>   $name </td>
                                <td contenteditable id='quantity' data-id1='$id'>     $quantity</td>
                                <td contenteditable id='currentq' data-id1='$id'>     $cQuantity</td>
                                <td contenteditable id='brand' data-id1='$id'>        $brand</td>
                                <td contenteditable id='price' data-id1='$id'>        $price</td>
                                <td contenteditable id='preOrderl' data-id1='$id'>    $preOrder</td>
                                



                            </tr>";
                            }
                        }

                         ?>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>