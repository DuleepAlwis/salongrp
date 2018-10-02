
<html xmlns="http://www.w3.org/1999/xhtml" >
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Responsive Bootstrap Advance Admin Template</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!--CUSTOM BASIC STYLES-->
    <link href="assets/css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SALOON SANROOKA</a>
            </div>

            <div class="header-right">

              <a href="message-task.html" class="btn btn-info" title="New Message"><b>30 </b><i class="fa fa-envelope-o fa-2x"></i></a>
                <a href="message-task.html" class="btn btn-primary" title="New Task"><b>40 </b><i class="fa fa-bars fa-2x"></i></a>
                <a href="login.html" class="btn btn-danger" title="Logout"><i class="fa fa-exclamation-circle fa-2x"></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <img src="assets/img/user.png" class="img-thumbnail" />

                            <div class="inner-text">
                                Admin
                            <br />
                                <small>Last Login : 2 Weeks Ago </small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href="adminIndex.php"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"  class="active-menu-top"><i class="fa fa-desktop "></i>Employee<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level collapse in">
                            <li>
                                <a class="active-menu" href="adminEmpReg.php"><i class="fa fa-toggle-on"></i>Registraion</a>
                            </li>
                            <li>
                                <a href="adminEmpView.php"><i class="fa fa-bell "></i>View Employee</a>
                            </li>



                        </ul>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-yelp "></i>stock <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">

                             <li>
                                <a href="stockVIew.php"><i class="fa fa-send "></i>View stock</a>
                            </li>

                             <li>
                                <a href="message-task.html"><i class="fa fa-recycle "></i>Messages & Tasks</a>
                            </li>


                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-bicycle "></i>Customer <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">

                             <li>
                                <a href="employeeView.php"><i class="fa fa-desktop "></i>View customer </a>
                            </li>
                             <li>
                                <a href="form-advance.html"><i class="fa fa-code "></i>Advance</a>
                            </li>


                        </ul>
                    </li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">

                <!-- /. ROW  -->

                <div class="row">

<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Registraion form
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post"   name="regForm" action="adminEmpRegCon.php" onsubmit="return validateForm()">

                                <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="Name" value="" required>
                                     <p class="help-block"><p class="help-block">
                                        <font color="red">

                                        </font>
                                    </p></p>
                                </div>

                                    <div class="form-group">
                                        <label>NIC</label>
                                        <input class="form-control" type="text" name="NIC" value="" required>
                                        <p class="help-block"><p class="help-block">
                                            <font color="red">

                                            </font>
                                        </p></p>
                                    </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="Address" value="">
                                    <p class="help-block"><p class="help-block">
                                        <font color="red">

                                        </font>
                                    </p></p>
                                </div>
                                <div class="form-group">
                                    <label>jDate</label>
                                    <input class="form-control" type="date" name="jdate" value="22/05/1996" required>
                                    <p class="help-block">
                                        <font color="red">

                                        </font>
                                    </p>
                                </div>

                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email" name="Email" value="" required>
                                     <p class="help-block"><p class="help-block">
                                         <font color="red">

                                         </font>
                                     </p></p>
                                        </div>
                                <div class="form-group">
                                            <label>Mobile number</label>
                                            <input class="form-control" type="tel" name="Contact" value="" id="mobile" required>
                                     <p class="help-block">
                                         <font color="red">
                                    <p id="demo"></p>
                                         </font>
                                     </p>
                                        </div>
										<label>gender</label>
                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="male" value="male" checked="">male
                                                </label>
                                            </div>
                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="female" value="female">female
                                                </label>
                                            </div>

                                <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password" name="Password" required>
                                     <p class="help-block">
                                         <font color="red">
                                    <p id="pass"></p>
                                         </font>

                                                </p>
                                        </div>
                                <div class="form-group">
                                            <label>Re Type Password </label>
                                            <input class="form-control" type="password" name="passwordverify" required>
                                     <p class="help-block">
                                    <font color="red">

                                    </font>
                                    </p>
                                        </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Select type</label>
                                        <select class="form-control" name="ulevel">
                                            <option>beautician</option>
                                            <option>receptionist</option>
                                            <option>other</option>

                                        </select>
                                    </div>

                                        <button type="submit"  class="btn btn-danger" >Register Now </button>

                                    </form>
                            </div>
                        </div>
                            </div>
        </div>
             <!--/.ROW-->

                        </div>
                            </div>

                            </div>
                        </div>
                            </div>

        </div>

            </div>
            <!-- /. PAGE INNER  -->
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
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    <script src= "assets/js/formValidate.js"></script>


</body>
</html>
