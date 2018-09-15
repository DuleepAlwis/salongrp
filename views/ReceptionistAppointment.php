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
<?php
include "layout/ReceptionistLayout.php";
include "../controller/AppointmentController.php";
?>
<div class="container-fluid">
    <div class="row mt-1">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="row">
            <div class="col">
                Date :
                <input type="date" class="form-control" name="date" >
            </div>
            <div class="col">
                Employee :
                <select name="employee"><option>AAA</option><option>AAA</option><option>AAA</option></select>
            </div>
            <div class="col">
                <input type="submit" name="View" value="View">
            </div>
        </div>
    </form>
    </div>
    <div class="row mt-3">

        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 align="center">Appointments</h1>
            <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                    <caption>List of Appointments</caption>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">

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
                    if(isset($_POST["date"]) && isset($_POST["employee"]))
                    {
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
    </div>


    <script src="../js/vendor/jquery-3.2.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/Receptionist.js"></script>
</body>
</html>