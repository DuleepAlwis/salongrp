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
include "layout/AdminLayout.php";
include "../controller/CustomerController.php";
?>


<header id="main-header" class="py-2 bg-warning text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Customers</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-2"><a href="AdminDashboard.php"><img src="../img/icons/house.png" style="width:50px"></img></a></div>
        </div>
    </div>
</header>

<!-- ACTIONS -->
<section id="action" class="py-4 mb-4 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ml-auto">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
              <button class="btn btn-warning">Search</button>
            </span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- USERS -->
<section id="posts">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="table-responisve-md" style="height:500px;overflow-y:auto">
                    <table class="table table-striped">
                        <thead class="thead-inverse">
                        <tr>

                            <th>Name</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Terms</th>
                            <th>City</th>
                            <th>District</th>
                            <th>Gender</th>

                            <th></th>
                        </tr>
                        </thead>
                        <tbody class="text-primary">

                        <?php

                        if(($result=getAll())!=null)
                        {

                            $result->bind_result($id,$name,$email,$address,$tpno,$terms,$city,$district,$gender);
                            while($result->fetch())
                            {
                                echo "<tr><td scope='row'>".$name."</td><td>".$email."</td><td>".$address."</td><td>".$terms."</td><td>".
                                    $city."</td><td>".$district."</td><td>".$gender."</td><td><button class='btn btn-danger' onclick='removeItem('$id')'>".'Remove'."</button></td></tr>";
                            }

                        }
                        ?>

                        </tbody>
                    </table>


                </div>
            </div>
        </div>

</section>



<script src="../js/jquery.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.7.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'editor1' );
</script>
</body>
</html>