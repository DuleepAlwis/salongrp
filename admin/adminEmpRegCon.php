<?php

include "../controller/EmployeeController.php";
 if(AddEmployee())
    {
        $_POST = array();
        echo "<script type='text/javascript'>alert('success');</script>";
        include "adminEmpReg.php";
    }

