
<script src="chartjs.js"></script>
<html>
<head>
<title>graph</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>


<!--    <meta charset="utf-8" />-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<!--    <title>Responsive Bootstrap Advance Admin Template</title>-->
<!---->
<!--    <!-- BOOTSTRAP STYLES-->-->
<!--    <link href="assets/css/bootstrap.css" rel="stylesheet" />-->
<!--    <!-- FONTAWESOME STYLES-->-->
<!--    <link href="assets/css/font-awesome.css" rel="stylesheet" />-->
<!--    <!--CUSTOM BASIC STYLES-->-->
<!--    <link href="assets/css/basic.css" rel="stylesheet" />-->
<!--    <!--CUSTOM MAIN STYLES-->-->
<!--    <link href="assets/css/custom.css" rel="stylesheet" />-->
<!--    <!-- GOOGLE FONTS-->-->
<!--    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />-->


<!--//--><?php //require_once  "layout/AdminLayout.php"?>
</head>
<body>
<div class="row">
    <div class="col-md-6 col-sm-6 col-xs-12">
        <div class="panel panel-info" style="width:500px; ">
            <div class="panel-heading">
                Earnings
            </div>
            <div class="panel-body">
                <form role="form" action="../controller/graph.php" method="post">
                    <div class="form-group">
                        <label>Enter From date</label>
                        <input class="form-control" type="date" name="fdate" value="<?php echo isset($_POST['fdate']) ? $_POST['fdate'] : '' ?>">
                        <p class="help-block">Help text here.</p>
                    </div>
                    <div class="form-group">
                        <label>Enter to date</label>
                        <input class="form-control" type="date" input type="date" name="tdate" value="<?php echo isset($_POST['tdate']) ? $_POST['tdate'] : '' ?>">
                        <p class="help-block">Help text here.</p>
                    </div>


                    <input type="submit" name="field" value="appointment" class="btn btn-info">
                    <input type="submit" name="field" value="product" class="btn btn-success">

                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-xs-12">


</div>


</div>



<!--<form action="../controller/graph.php" method="post">-->
<!--    FROM: <input type="date" name="fdate" value="--><?php //echo isset($_POST['fdate']) ? $_POST['fdate'] : '' ?><!--"><br><br>-->
<!--    TO  : <input type="date" name="tdate" value="--><?php //echo isset($_POST['tdate']) ? $_POST['tdate'] : '' ?><!--"><br><br>-->
<!--    <input type="submit" name="field" value="appointment" class="btn btn-info">-->
<!--    <input type="submit" name="field" value="product" class="btn btn-success">-->
<!--</form>-->

<!--<br /><br />-->
<!--<div class="container" style="width:500px; margin:0 auto;">-->
<!--    <h2 align="center">Morris.js chart with PHP & Mysql</h2>-->
<!--    <h3 align="center">Last  Profit, Purchase and Sale Data</h3>-->
<!--    <br /><br />-->
<!--    <div id="chart"></div>-->

</body>
</html>

<?php if(isset($_POST["field"])){

    echo "
    <div class=\"container\" style=\"width:500px; margin:0 auto;\">
    <h2 align=\"center\">SALOON SANROOKA</h2>
    <h3 align=\"center\">Last  Profit, Purchase and Sale Data</h3>
    <br /><br />
    <div id=\"chart\"></div>
    
    
    
    
    
    
    
    ";

    include "chartjs.php";
    if($_POST["field"]=='product') {
        echo "<script>funProducts()</script>";
    }else{echo "<script>funAppointments()</script>";}
}
?>










