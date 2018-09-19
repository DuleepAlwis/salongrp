<?php

include "../model/Login.php";
$login = new Login();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["uname"]) && isset($_POST["password"]))
    {
<<<<<<< HEAD
        if($login->logUser(test($_POST["uname"]),test($_POST["password"])))
        {

        }
        else
        {
            echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
            //header("Location:../index.php");
        }
=======
        if($login->logUser(test($_POST["uname"]),$_POST["password"])==false)
        {
            //Redirect to index page
            //header("Location:../index.php");
            echo "<script type='text/javascript'>alert('Invalid Credentials')</script>";
        }
        else
        {

        }

>>>>>>> 54a2114fdd0765d76bc7c4558ab73bf29229f497
    }

}

if($_SERVER["REQUEST_METHOD"]=="GET")
{
    if(isset($_GET["uname"]) && isset($_GET["validc"]))
    {
        if($login->confirmUserr(test($_GET["uname"]),test($_GET["validc"])))
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