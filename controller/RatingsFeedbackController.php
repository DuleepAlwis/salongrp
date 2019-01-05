<?php

if(file_exists( "model/RatingsFeedback.php"))
{
    require_once( "model/Database.php");
    require_once( "model/RatingsFeedback.php");
}

if(file_exists("../../model/RatingsFeedback.php"))
{
    require_once( "../../model/Database.php");
    require_once( "../../model/RatingsFeedback.php");
}



function addComment()
{
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Rating = new RatingsFeedback();
        $Rating->employee = $_POST["empId"];
        $Rating->rateValue = $_POST["rateValue"];
        $Rating->feedback = $_POST["feedBack"];
        if($Rating->addComment())
        {
            return true;
        }
        return false;

    }

}

function getComment($id)
{
    $Rating = new RatingsFeedback();
    return $Rating->getComment($id);

}

function getAllComments()
{
    $Rating = new RatingsFeedback();
    return $Rating->getAllComment();
}