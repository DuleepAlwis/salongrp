<?php

session_start();
if(isset($_SESSION["email"]))
{
    echo $_SESSION["email"];
    $_SESSION = array();
    session_destroy();
    header("Location:../index.php");
    echo $_SESSION["email"];
}
?>