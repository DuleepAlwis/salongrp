<?php
/**
 * Created by PhpStorm.
 * User: Noob
 * Date: 9/15/2018
 * Time: 1:57 PM
 */
class test_input{
    private $data;

    public function t_input($data) {
        $this->data = trim($data);
        $this->data = stripslashes($data);
        $this->data = htmlspecialchars($data);
        return $data;
    }
}