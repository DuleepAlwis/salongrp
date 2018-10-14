<?php
$connect = mysqli_connect("localhost", "root", "", "sample");
$sql = "INSERT INTO sample(fname, lname) VALUES('".$_POST["first_name"]."', '".$_POST["last_name"]."')";
if(mysqli_query($connect, $sql))
{
    echo 'Data Inserted';
}
