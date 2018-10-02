<?php include "../controller/EmployeeController.php";?>

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
                            <th>NIC</th>
                            <th>Ename</th>
                            <th>TpNO</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>JoinDate</th>
                            <th>Gender</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                       <?php
                       $result = getAll();
                       ?>



                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["NIC"]; ?> </td>
                                <td> <?php echo $row["name"]; ?></td>
                                <td> <?php echo $row["tpno"]; ?></td>
                                <td> <?php echo $row["email"]; ?></td>
                                <td> <?php echo $row["address"]; ?></td>
                                <td><?php echo $row["joindate"]; ?> </td>
                                <td><?php echo $row["gender"]; ?> </td>
                                <td><?php echo $row["type"]; ?> </td>
                                <td><button type="button" name="delete_btn" data-id3="<?php echo $row["id"]; ?>" class="btn btn-xs btn-danger btn_delete">x</button>

                                </td>
                                <td><button type="button" name="btn_add" id="btn_add" data-id4="<?php echo $row["id"]; ?>"class="btn btn-xs btn-success">View</button></td>

                            </tr>
                        <?php  endwhile; ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>