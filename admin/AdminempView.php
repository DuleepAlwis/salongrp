<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../icontop.jpg">
    <title>Salon Sanrooka</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="../assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <?php 
    include "../views/layout/AdminLayout.php";
    include "../Controller/EmployeeController.php";
    ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">

            <!--<div id="page-inner">
                
                <!-- /. ROW  -->

                <div class="row">
           
<div class="col-md-12">
<div id="page-wrapper">
        <div id="page-inner">
            <div class="row">
                
                <div class="table-responisve-md-5" style="height:500px;overflow-y:auto">
                <table class="table table-bordered" style="height:150px">

                    <caption><h1>Employee List</h1></caption>
                    <thead>
                    <tr style="position:sticky;background-color: #01549b">
                        <th>NIC</th>
                        <th>Name</th>
                        <th>TPNO</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Join-Date</th>
                        <th>Gender</th>
                        <th>User Level</th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody class="text-primary">

                        <?php

                        if(($result=getAll())!=null)
                        {

                            $result->bind_result($id,$NIC,$name,$tpno,$email,$address,$joindate,$gender,$ulevel);
                            while($result->fetch())
                            {
                                echo "<tr><td scope='row'>".$NIC."</td><td>".$name."</td><td>".$tpno."</td><td>".$email."</td><td>".
                                $address."</td><td>".$joindate."</td><td>".$gender."</td><td>".$ulevel."</td><td><button class='btn btn-info'>".'View'."</button></td><td><button class='btn btn-danger'>".'Remove'."</button></td></tr>";
                            }

                        }
                        ?>

                    </tbody>
                </table>

                    
                
            
                    </div>
            
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <div id="footer-sec">
        &copy; 2014 YourCompany | Design By : <a href="http://www.binarytheme.com/" target="_blank">BinaryTheme.com</a>
    </div>
                  
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>
