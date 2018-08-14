<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 8/14/2018
 * Time: 8:41 PM
 */

class Employee extends Person
{
    private $joindate;

    /**
     * @return mixed
     */
    public function getJoindate()
    {
        return $this->joindate;
    }

    /**
     * @param mixed $joindate
     */
    public function setJoindate($joindate)
    {
        $this->joindate = $joindate;
    }
}
?>