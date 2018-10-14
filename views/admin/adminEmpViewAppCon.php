<?php include "../controller/AppointmentController.php";?>

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

                            <th>Bid</th>
                            <th>Cid</th>
                            <th>Date</th>
                            <th>time</th>
                            <th>price</th>
                            <th>Sid</th>

                        </tr>
                        <?php
                        $result = getAppointments($_POST["id"]);
                        ?>



                        </thead>
                        <tbody>
                        <?php while($row = mysqli_fetch_array($result)):; ?>
                            <tr>
                                <td><?php echo $row["beauticianid"]; ?></td>
                                <td><?php echo $row["customerid"]; ?> </td>
                                <td> <?php echo $row["date"]; ?></td>
                                <td> <?php echo $row["time"]; ?></td>
                                <td> <?php echo $row["price"]; ?></td>
                                <td> <?php echo $row["name"]; ?></td>



                            </tr>
                        <?php  endwhile; ?>
                        <tr><td><button type="button" name="btn_add" id="btn_back" class="btn btn-xs btn-success">BACK</button></td></tr>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>