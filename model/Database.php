<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/2/2018
 * Time: 9:47 PM
 */

class Database
{
    private static $con = null;
    private function  __construct()
    {
       //$this->con = new mysqli("localhost","root","","salondb");
        //$this->con = new mysqli("localhost","dulip","dulip123","salondb");
    }

    /**
     *
     */

    public static function getConnection()
    {

            //$con = mysqli_connect("127.0.0.1","root","","salondb");
            if(self::$con==null)
            {
                self::$con = new mysqli("localhost","dulip","dulip123","salondb");
            }
            //

        return self::$con;
    }
    public function Add($details, $sql)
    {
        $i=0;
        $stmt = null;

        if (!empty($sql)) {
            $stmt = $this->con->prepare($sql);
            //$stmt->bind_param('sssssssss',$details[0],$details[1],$details[2],$details[3],$details[4],$details[5],$details[6],$details[7],$details[8]);
            for($i=0;$i<count($details)-1;$i++)
            {
                echo $details[$i];
                $stmt->bind_param('s',$details[$i]);

            }

            if($stmt->execute())
            {
                return true;
            }
        }
        return false;

    }
}
