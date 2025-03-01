<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Salon Sanrooka</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="icon" type="image/x-icon" href="icontop.jpg">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
<?php
    session_start();
    require_once("controller/EmployeeController.php");

?>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
            <div class="container">
                <img src="img/image13.png" width="10%" height="10%"><a href="index.php" style="font-size: 37px" class="navbar-brand display-5">Salon SANROOKA</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto" style="font-size: 23px">
                        <li class="nav-item">
                            <a href="#home-section" class="nav-link text-primary">Home</a>
                        </li>
                        <!--<li class="nav-item">
                            <a href="#register" class="nav-link text-primary">Register</a>
                        </li>-->
                        <li class="nav-item">
                            <a href="#services" class="nav-link text-primary">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Gallery" class="nav-link text-primary">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a href="#Gallery" class="nav-link text-primary">About us</a>
                        </li>
                        <?php
                        
                        if(!isset($_SESSION["id"]))
                            {
                                echo "
                                     <li class='nav-item'>
                            <span href='' class='nav-link text-primary'><button type='button' class='btn btn-primary border' data-toggle='modal' data-target='#exampleModal'>Login</button></span>
                        </li>
                                ";
                            }
                       ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content bg-info">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body bg-primary">
                        <form name="login" method="post" action="controller/LoginController.php">
                            <div class="form-group">
                                <input type="text" name="uname" class="form-control form-control-lg" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                            </div>
                            <small>Don't have an account? Then <a class="text-dark" href="./register.php">Sign in</a></small>
                            <small>Forgot Password <a class="text-dark" href="./forgotpassword.php">Forgot Password</a></small>


                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="login" class="btn btn-success text-dark" value="Login"> <input type="reset" class="btn btn-success" value="Cancel" data-dismiss="modal">

                        <!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <header id="home-section">
            <div class="dark-overlay">
                <div class="home-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 d-none d-lg-block">
                                <h1 class="display-4"><strong></strong><strong></strong></h1>
                            </div>
                            <div class="col-lg-4">

                                <?php
                        
                                    if(!isset($_SESSION["id"]))
                                        {
                                            echo "
                                            <button  type='button' class='btn btn-primary border' data-toggle='modal' data-target='#exampleModal'>Make an appointment</button>
                                            ";
                                        }
                                ?>
                                <!--<div class="card bg-primary text-center card-form">
                                    <div class="card-body">
                                        <h3>Here is your Login</h3>
                                        <form name="login" method="post" action="controller/LoginController.php">
                                            <div class="form-group">
                                                <input type="text" name="uname" class="form-control form-control-lg" placeholder="Username">
                                            </div>

                                            <div class="form-group">
                                                <input type="password" name="password" class="form-control form-control-lg" placeholder="Password">
                                            </div>

                                            <input type="submit" name="login" class="btn btn-outline-light" value="Login"> <input type="reset" class="btn btn-outline-light" value="Cancel">

                                        </form>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- EXPLORE HEAD-->
        <!--<section id="register">
            <!-- EXPLORE SECTION -->
        <section id="explore-section" class="bg-light text-muted py-5">
            <div class="container">
                <?php
                $result = getEmployeeRatings();
                if($result)
                    {
                        $result->store_result();
                        $result->bind_result($name,$location,$rateValue);
                        $i=1;
                        echo $result->num_rows;
                        while($i<$result->num_rows)
                        {
                            echo "<div class='row'>";
                            while($result->fetch())
                            {

                                $rateValue = $rateValue."%";
                                    echo "<div class='col-md-3'><div class='card border-light' style='width: 18rem;margin-left: 0px;border-style: inset;'>
                            <img class='card-img-top' src=" . "$location" . " alt='Card'" . " height='250px'>
                            <div class='card-body' style='background-color: #8699a4'>
                                <p class='card-text text-dark'><b>" . "$name" . "</b></p>
                               <div style='border-radius: 7px;border-style: inset'>
<div class='mt-0 progress'><div class='progress-bar' role='progressbar' aria-valuenow=" . "0" . " aria-valuemin='0' aria-valuemax='100' style="."width:$rateValue"."></div></div>
</div></div></div></div><div class='col-md-1'></div>";

                                    if ($i % 3 == 0 || $i==$result->num_rows)
                                    {
                                        break;
                                    }
                                $i = $i + 1;

                            }
                            echo "</div>";

                        }

                    }
                    else
                    {
                        echo 111;
                    }
                    ?>

                        <?php
                        /*$result = getEmployeeRatings();
                        $i=0;
                        if($result)
                        {
                            $result->bind_result($name,$location,$rateValue);
                            echo $name." ".$location." ".$rateValue;

                            while($i!=$result->num_rows)
                            {
                                echo "<div class='carousel-inner'>";
                                if ($i == 0) {
                                    echo "<div class='carousel-item active'>";
                                } else {
                                    echo "<div class='carousel-item'>";

                                }


                                echo "<div class='row'>";
                                while ($result->fetch())
                                {
                                    $rateValue = $rateValue . "%";
                                    echo "<div class='card' style='width: 18rem;margin-left: 150px'>
                            <img class='card-img-top' src=" . "$location" . " alt='Card image cap'" . ">
                            <div class='card-body'>
                                <p class='card-text'><b>" . "$name" . "</b></p>
                               <div style='border-radius: 7px;border-style: inset'>
<div class='mt-0 progress'><div class='progress-bar' role='progressbar' aria-valuenow=" . "0" . " aria-valuemin='0' aria-valuemax='100' style="."width:$rateValue"."></div></div>
</div>";
                                    $i = $i + 1;
                                    if ($i % 3 == 0)
                                    {
                                        break;
                                    }
                                }
                                echo "</div></div></div>";
                            }
                                

                            }



                       */ ?>


            </div>
        </section>

        <!--</section>-->


        <!-- CREATE HEAD -->
        <section id="services" class="bg-secondary">
            <div class="container">
                <div class="row">
                    <h3 align="center" class="display-3">Services</h3>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    <div class="card ml-3 border-primary" style="width: 18rem;border-style: outset">
                        <img class="card-img-top" src="img/image7.jpg" width="50" height="150" alt="Card image cap">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal1">
                                Hair Cutting
                            </button>
                        </div>
                        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hair Cutting</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        <b>Ladies</b>
                                        <div>
                                            Hair trim(one length)          Rs.300/- <br>
                                            Hair cut without blow dry      Rs.700/- <br>
                                            Hair cut (senior hair dresser) Rs.1000/-
                                        </div>
                                        <b>Gents</b>
                                        <div>
                                            Hair Cut                        Rs.300/- <br>
                                            Hair cut & wash                 Rs.400/- <br>
                                            Hair cut & setting              Rs.450/-
                                            Children
                                        </div>
                                        <b>Children</b>
                                        <div>
                                            Hair Cut -boy's                 Rs.200/- <br>
                                            Hair Cut -girl's                Rs.200/- <br>
                                            Boys's school hair cut          Rs.150/- onwards
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-md-3">
                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top" src="img/image2.jpg" width="50" height="150" alt="Card image cap">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal2">
                                Hair Colouring
                            </button>
                        </div>
                        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Hair Colouring</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        White hair coverage   Rs. 600/- <br>
                                        Fashion color         Rs. 1500/- <br>
                                        Straking              Rs. 2000/- <br>
                                        Relaxing              Rs. 1550/- <br>
                                        Re bonding            Rs. 7500/-
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-3">
                <div class="card ml-3" style="width: 18rem;">
                    <img class="card-img-top" src="img/image17.jpg" width="50" height="150" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal3">
                            Threading
                        </button>
                    </div>
                    <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content text-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Threading</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-dark">
                                    Eye brows   Rs.150/- <br>
                                    Upper lip   Rs.50/-  <br>
                                    Cheeks      Rs.200/-
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-1">
                <div class="col-md-3">
            <div class="card ml-3" style="width: 18rem;">
                <img class="card-img-top" src="img/image11.jpg" width="50" height="150" alt="Card image cap">
                <div class="card-body">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal4">
                        Waxing
                    </button>
                </div>
                <div class="modal fade" id="Modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content text-dark">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Waxing</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-dark">
                                Full arms   Rs.800/-<br>
                                Half arms   Rs.600/-  <br>
                                Upper arms  Rs.200/-
                            </div>
                        </div>

                    </div>
                </div>
            </div>
                </div>

                        <div class="col-md-3">
                <div class="card ml-3" style="width: 18rem;">
                    <img class="card-img-top" src="img/image12.png" width="50" height="150" alt="Card image cap">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal5">
                            Facials
                        </button>
                    </div>
                    <div class="modal fade" id="Modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content text-dark">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Facials</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body text-dark">
                                    Clean Up        Rs.1300/- <br>
                                    Facial          Rs.1500/- <br>
                                    Orange facial   Rs.1800/-
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                        </div>
                <div class="col-md-3">
                    <div class="card ml-3" style="width: 18rem;">
                        <img class="card-img-top" src="img/image18.jpg" width="50" height="150" alt="Card image cap">
                        <div class="card-body">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal6">
                                Dressing
                            </button>
                        </div>
                        <div class="modal fade" id="Modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content text-dark">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Facials</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-dark">
                                        Sari dressing   Rs.150/- <br>
                                        Make up         Rs.650/-  <br>
                                        Hair style      Rs.900/-
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>

        <!-- CREATE SECTION -->
        <!--<section id="create-section" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Create your passion</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus provident sed mollitia, ab sint fuga quibusdam. At repellendus architecto nobis nesciunt suscipit, nisi ipsam quaerat?</p>
                        <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, architecto, quaerat. Quis cum eius itaque ipsa magni quam, illo molestias
                            </div>
                        </div>

                        <div class="d-flex flex-row">
                            <div class="p-4 align-self-start">
                                <i class="fa fa-check"></i>
                            </div>
                            <div class="p-4 align-self-end">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, architecto, quaerat. Quis cum eius itaque ipsa magni quam, illo molestias
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="img/create-section1.jpg" alt="" class="img-fluid mb-3 rounded-circle">
                    </div>
                </div>
            </div>
        </section>-->


        <!-- SHARE HEAD -->
        <!--<section id="Gallery" class="bg-primary">
            Gallery
            <div class="container">
                <div class="row">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/image14.png" alt="First slide" style="width: 100%;height:100%">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/image15.jpg" alt="Second slide" style="width: 100%;height:100%">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/image8.jpg" alt="Third slide" style="width: 100%;height:100%">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>-->

        <!-- SHARE SECTION -->
        <section id="share-section" class="py-5 bg-light text-muted">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </section>

        <!-- MAIN FOOTER -->
        <footer id="main-footer" class="bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <div class="py-4">
                            <img src="img/image13.png" width="10%" height="10%"><h3 style="display: inline-block">Sanrooka salon</h3>
                            <p>104, Super market building, Mount Lavinia.</p>
                            <p>0112761677 </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- CONTACT MODAL -->



        <script src="js/vendor/jquery-3.2.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>



