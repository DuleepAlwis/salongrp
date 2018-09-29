<?php

include "../model/Database.php";
include "../model/Login.php";
$login = new Login();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["uname"]) && isset($_POST["password"]))
    {
        if($login->logUser(test($_POST["uname"]),$_POST["password"])==false)
        {
            //Redirect to index page
            //header("Location:../index.php");
            echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
        }
        else
        {

        }

    }

}

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(isset($_GET["uname"]) && isset($_GET["validc"]))
    {
        if($login->confirmUser(test($_GET["uname"]),test($_GET["validc"])))
        {

        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
        }
    }

}

function test($data)
{

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;

}
