<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Initial variables
$appid = 0;
$service = "";
$beautician = "";
$quantity = "";
$AppDate = "";
$AppTime = "";
$Edit_state = false;

if(isset($_GET['edit'])){
    $appid = $_GET['edit'];
    $quary = 'SELECT * FROM appoinment WHERE id=$appid';
    $rec = mysqli_query($conn, $quary);
    $recode = mysqli_fetch_array($rec);
    $service = $recode['service'];
    $beautician = $recode['beautician'];
    $quantity = $recode['quantity'];
    $appid = $recode['appid'];
}

//update recodes
if(isset($POST['update'])){
	$appid = mysql_real_escape_string($_POST['appid']);
	$service = mysql_real_escape_string($_POST['service']);
	$beautician = mysql_real_escape_string($_POST['beautician']);
	$service = mysql_real_escape_string($_POST['quantity']);
	 
}

 
  ?>