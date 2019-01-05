<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Salon Sanrooka</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/x-icon" href="../../icontop.jpg">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body class="receptionist-background">
<?php
include "../layout/ReceptionistLayout1.php";
include "../../controller/CustomerHelpController.php";
?>
<div class="container-fluid text-dark">
    <h1 align="center">Customer Support</h1>
    <div class="row">
        <div class="col-md-3">
            <h3>Customers</h3>
            <div class="receiver-List">
                <ul class="customer-list">
                    <?php

                        if(($result=getCustomers()))
                        {
                            $result->bind_result($name,$id);
                            while($result->fetch())
                            {

                                echo "<li style='list-style: none'><div class='mt-3 alert alert-primary border border-info' style='width: 200px'>"."<b id='$id'>".$name."</b>"."<button class='ml-3 btn btn-outline-primary' onClick='getReceptionistMessages($id)'>Add</button></div>";
                            }
                        }



                    ?>
                </ul>
            </div>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-7">
            <div id="messageBox" style="border-style: solid; width:700px;height: 550px;overflow-y: auto">
                <span id="sendto" style="background-color: #6ea1cc;border-radius: 3px"></span>
                <ul id="msgBox" style="list-style: none">

                </ul>

            </div>
            <div style="background-color: #0A0A0A;background-color: #ebebeb;width: 500px;height:100px">
                <textarea id="msgArea" style="background-color: #0A0A0A;background-color: #ebebeb;width: 500px;height:100px"></textarea>
                <button class="btn btn-info btn-outline-primary" onclick="receptionistMessage()">Send</button><button class="ml-3 btn btn-info btn-outline-primary" onclick="clearMessages()">Cancel</button>
            </div>
        </div>
    </div>
</div>
<script src="../../js/vendor/jquery-3.2.1.min.js"></script>
<script src="../../js/popper.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/CustomerHelp.js"></script>

</body>
</html>
