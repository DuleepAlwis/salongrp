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
                        <?php
                        $result = getAll();
                        ?>



                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                            <tr>
                                <td ><?php echo $row["id"]; ?></td>
                                <td contenteditable id="first_name" data-id1="<?php echo $row["id"]; ?>"><?php echo $row["name"]; ?> </td>
                                <td contenteditable id="quantity" data-id1="<?php echo $row["id"]; ?>"> <?php echo $row["quantity"]; ?></td>
                                <td contenteditable id="currentq" data-id1="<?php echo $row["id"]; ?>"> <?php echo $row["currentq"]; ?></td>
                                <td contenteditable id="brand" data-id1="<?php echo $row["id"]; ?>"> <?php echo $row["brand"]; ?></td>
                                <td contenteditable id="price" data-id1="<?php echo $row["id"]; ?>"> <?php echo $row["price"]; ?></td>
                                <td contenteditable id="preOrderl" data-id1="<?php echo $row["id"]; ?>"> <?php echo $row["preOrderl"]; ?></td>




                            </tr>
                        <?php  endwhile; ?>





                        </tbody>
                    </table>
                </div>
            </div>
        </div>