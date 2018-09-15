<?php

include "model/Login.php";
function logUser()
{
    $login = new Login();

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(isset($_POST["uname"]) && isset($_POST["password"]))
        {
            $uname = test($_POST["uname"]);
            $password = test($_POST["password"]);
            return $login->userLogin($uname,$password);
        }
    }
    return false;
}

function confirmUser()
{
    $login = new Login();

    if($_SERVER["REQUEST_METHOD"]=="GET")
    {
        if(isset($_POST["uname"]) && isset($_POST["code"]))
        {
            $uname = test($_POST["uname"]);
            $validationc = $_POST["code"];
            return $login->userActivate($uname,$validationc);
        }
    }

    return false;
}

function test($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    echo $data."123";
    return $data;
}
?>