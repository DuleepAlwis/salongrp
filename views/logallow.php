<?php
session_start();
if(!isset($_SESSION['email']))
{
    if(file_exists("./index.php"))
    {
        header("Location:./index.php");
    }
    else
    {
        header("Location:../index.php");

    }
}
?>