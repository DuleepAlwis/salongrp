<style>
    .msg {border:1px solid #bbb; padding:5px; margin:10px 0px; background:#eee;}
</style>
<?php
/**
 * Created by PhpStorm.
 * User: Noob
 * Date: 9/17/2018
 * Time: 5:15 PM
 */class employeeTableEditModel{
     private $conn;
    public function connect()
    {

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "salonsystem";

        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password, $database);

        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    public function delete($id){
        $sql = "DELETE FROM employee WHERE eid='$id'";

        if ($this->conn->query($sql) === TRUE) {
            echo '<div class="msg">'
                .'record Deleted successfully'
                .'</div>';
            include "employeeView.php";
        } else {
            echo "Error deleting record: " . $this->conn->error;
        }

        $this->conn->close();

    }
}