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

                            <th>id</th>
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
                        </thead>

                        <tbody>
                        <?php
                        if(($result=getAll())!=null)
                        {


                            $result->bind_result($id,$NIC,$name,$tpno,$email,$address,$joindate,$gender,$type);
                            while($result->fetch()){
                            echo "
                            <tr>
                                <td>$id</td>
                                <td>$NIC</td>
                                <td>$name</td>
                                <td>$tpno</td>
                                <td>$email</td>
                                <td>$address</td>
                                <td>$joindate</td>
                                <td>$gender</td>
                                <td>$type</td>
                                <td><button type='button' name='delete_btn' data-id3= '$id' class='btn btn-xs btn-danger btn_delete'>x</button>

                                </td>
                                <td><button type='button' name='btn_add' id='btn_add' data-id4='$id' class='btn btn-xs btn-success'>View</button></td>

                            </tr>";
                            }
                        }
                        ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>