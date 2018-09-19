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
    <?php include "../views/layout/AdminLayout.php" ?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                
                <!-- /. ROW  -->

                <div class="row">
           
<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           Registration form
                        </div>
                        <div class="panel-body">
                            <form action="empRegCon.php"  role="form" method="post">
                            <div class="form-group">
                                            <label>NIC</label>
                                            <input class="form-control" type="text" name="name" value="" required>
                                     
                                        </div>
                                <div class="form-group">
                                            <label>Name</label>
                                            <input class="form-control" type="text" name="name" value="" reqired>
                                     
                                        </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" type="text" name="address" value="" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label>Joined Date</label>
                                    <input class="form-control" type="date" name="jDate" value="" required>
                                    
                                </div>
                                        
                                 <div class="form-group">
                                            <label>Enter Email</label>
                                            <input class="form-control" type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    
                                     
                                        </div>
                                <div class="form-group">
                                            <label>Mobile number</label>
                                            <input class="form-control" type="tel" name="mobile" value="" required pattern="[0-9]{10}">
                                     <p class="help-block">
                                         
                                     </p>
                                        </div>
										<label>Gender</label>
                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="male" value="male" checked="">Male
                                                </label>
                                            </div>
                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="gender" id="female" value="female">Female
                                                </label>
                                            </div>

                                <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password" name="password" required pattern=".{7,}" title="7 or more characters">

                                        </div>
                                <div class="form-group">
                                            <label>Re Type Password </label>
                                            <input class="form-control" type="password" name="passwordverify">
                                     <p class="help-block">
                                    <font color="red">
                                        <?php if(isset($_POST["passwordverify"]))
                                        {if(empty($_POST["passwordverify"])){
                                            echo "*required";}} ?>
                                    </font>
                                    </p>
                                        </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label>Select type</label>
                                        <select class="form-control" name="ulevel">
                                            <option>Beautician</option>
                                            <option>Receptionist</option>
                                            

                                        </select>
                                    </div>
                                 
                                        <button type="submit" class="btn btn-danger">Register Now </button>

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
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>
