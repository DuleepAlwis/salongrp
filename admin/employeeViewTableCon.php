<?php include "employeeViewModel.php"?>
<div class="row">
    <div class="col-md-10">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Employee details
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                        <tr>

                            <th>Eid</th>
                            <th>Ename</th>
                            <th>Gender</th>
                            <th>TpNo</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>JoinDate</th>

                            <th>Type</th>
                            <th>action</th>
                        </tr>
                        <?php
                        $getData = new employeeViewModel();
                        $getData->connect();
                        $result = $getData->getData();
                        ?>



                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)){ ?>{
                        <tr>
                            <td><?php echo $row["eid"]; ?></td>
                            <td><?php echo $row["ename"]; ?> </td>
                            <td> <?php echo $row["gender"]; ?></td>
                            <td> <?php echo $row["tpno"]; ?></td>
                            <td> <?php echo $row["email"]; ?></td>
                            <td> <?php echo $row["address"]; ?></td>
                            <td><?php echo $row["joindate"]; ?> </td>

                            <td><?php echo $row["type"]; ?> </td>
                            <td><a href="employeeTableEditCon.php?id=<?php echo $row["eid"];?>" >Delete</a></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>