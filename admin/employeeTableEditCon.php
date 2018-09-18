<?php
/**
 * Created by PhpStorm.
 * User: Noob
 * Date: 9/17/2018
 * Time: 12:48 AM
 */
 $id=$_REQUEST['id'];

 include "employeeTableEditModel.php";
 $evm = new employeeTableEditModel();
 $evm->connect();
 $evm->delete($id);


