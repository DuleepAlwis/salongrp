<?php include "../controller/AppointmentController.php";?>

<div class="row">
    <div class="col-md-10">
        <!--   Kitchen Sink -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Appointment details
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
                            <th>SName</th>

                        </tr>
                        <?php
                            if(($result=getAppointments($_POST['id']))!=null) {


                                $result->bind_result($id, $CIC, $Date, $time, $price, $Sid);
                                while ($result->fetch()) {
                                    echo "
                            <tr>
                                <td>$id</td>
                                <td>$CIC</td>
                                <td>$Date</td>
                                <td>$time</td>
                                <td>$price</td>
                                <td>$Sid</td>
                                


                            
                            </tr>
                        
                        
                           ";
                                 }
                            }
                                echo"<tr><td><button type='button' name='btn_add' id='btn_back' class='btn btn-xs btn-success'>BACK</button></td></tr>";
                            ?>




                        </tbody>
                    </table>
                </div>
            </div>
        </div>