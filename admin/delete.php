<?php
$connect = mysqli_connect("localhost", "root", "", "sample");
$sql = "DELETE FROM sample WHERE id = '".$_POST["id"]."'";
if(mysqli_query($connect, $sql))
{
    echo 'Data Deleted';
}
