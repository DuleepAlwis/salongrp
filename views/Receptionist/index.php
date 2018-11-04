<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <title>Salon Sanrooka</title>
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body class="receptionist-background" onload="loadBeautician()">
<?php
require_once("../layout/ReceptionistLayout.php");
require_once("../../controller/AppointmentController.php");
require_once("../../controller/CustomerHelpController.php");

?>


<div class="container-fluid">
    <div class="row bg-light">

    </div>
    <div class="row mt-3">
        <div class="col-md-3 ml-3 mt-1 border-success" style="border-style: outset;background-color: #99979c">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="form-row text-dark">
            <div class="form-group col-md-6">
                <label for="inputDate">Date</label>
                <input type="date" class="form-control mt-1" id="inputDate" name="date">
            </div>

            <div class="form-group col-md-4">
                <label for="employee">Employee</label><br>
                <select id="employee" name="employee" class="mt-1"></select>
            </div>
            <div class="form-group col-md-2">

                <input type="submit" class="btn btn-primary" name="View" value="View">
            </div>
        </div>

    </form>
        </div>
    </div>
    <div class="row mt-3">

        <div class="col-md-9 ml-3 text-dark">
            <h1 align="center">Appointments</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px;border-style: inset">

                    <caption>List of Appointments</caption>
                    <thead>
                    <tr style="position:sticky;background-color:#00aa88">

                        <th scope="col">No</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">Service</th>
                        <th scope="col">Beautician</th>
                        <th scope="col">Price</th>

                    </tr>
                    </thead>
                    <tbody class="text-primary">
                    <?php
                    if(!empty($_POST["date"]) && isset($_POST["employee"]))
                    {
                        echo $_POST["date"]." ".$_POST["employee"];
                        if(($result=getAll($_POST["date"],$_POST["employee"]))!=null)
                        {
                            $result->bind_result($id,$name,$date,$time,$service,$beautician,$price);
                            while($result->fetch())
                            {
                                echo "<tr><th scope='row'>".$id."</th><td>".$name."</td><td>".$date."</td><td>".
                                    $time."</td><td>".$service."</td><td>".$beautician."</td><td>".$price."</td></tr>";
                            }
                        }
                    }


                    ?>

                    </tbody>

                </table>
            </div>
        </div>
        <div class="col-md-2">
            <h3 class="text-gray-dark">Customers</h3>
            <div class="chat-list">

                    <ul class="mt-1 customer-list">
                        <?php

                        if(($result=getCustomers()))
                        {
                            $result->bind_result($name,$id);
                            while($result->fetch())
                            {
                                echo "<li style='list-style: none;margin-bottom: 17px'>"."<button data-toggle='modal' data-target='#exampleModal' class='ml-3 btn' onClick='getReceptionistMessages($id)'>"."<b id='$id'>".$name."</b>"."</button></li>";
                                //echo "<li style='list-style: none'><div class='mt-3 alert alert-primary border border-info' style='width: 150px;border-radius: 17px;border-style: ridge'>"."<b id='$id'>".$name."</b>"."<button class='ml-3 btn btn-outline-primary' onClick='getReceptionistMessages($id)'>Add</button></div>";
                            }
                        }



                        ?>
                    </ul>
                <div id="messageArea">
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="left:50%;top:50%">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-dark" id="exampleModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div style="background-color: #6ea1cc;overflow-y: auto">
                                        <ul id="msgBox" style="list-style: none">

                                        </ul>
                                    </div>

                                    <textarea id="msgArea" style="background-color: #e9ecef;width: 300px;height:100px"></textarea>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info btn-outline-primary" onclick="clearMessages()" data-dismiss="modal">Close</button>
                                    <button type="button" class="ml-3 btn btn-info btn-outline-primary" onclick="receptionistMessage()">Send message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


        </div>
        </div>
        <div class="col-md-1"></div>
    </div>

</div>
    <script src="../../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/Receptionist.js"></script>
<script src="../../js/CustomerHelp.js"></script>

</body>
</html>
