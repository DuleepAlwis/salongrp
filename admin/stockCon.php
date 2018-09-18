<?php include "stockModel.php"; ?>
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

                            <th>ItemId</th>
                            <th>ItemName</th>
                            <th>Quantity</th>
                            <th>CurrentQ</th>

                            <th>action</th>
                        </tr>
                        <?php
                        $getData = new stockModel();
                        $getData->connect();
                        $result = $getData->getData();
                        ?>



                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)):; ?>{
                            <tr>
                                <td><?php echo $row["itemid"]; ?></td>
                                <td><?php echo $row["itemname"]; ?> </td>
                                <td> <?php echo $row["quantity"]; ?></td>
                                <td> <?php echo $row["currentq"]; ?></td>

                                <td><a href="employeeTableEditCon.php?id=<?php echo $row["Iid"];?>" >Delete</a></td>
                            </tr>
                        <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>