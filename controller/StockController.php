<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/10/2018
 * Time: 1:32 AM
 */

include "model/Stock.php";


public function AddItem()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $stock = new Stock();

        if ($stock->AddItem())
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}

public function RemoveItem($id)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $stock = new Stock();

        if ($stock->RemoveItem($id)) {
            return true;
        } else {
            return false;
        }
    }
}