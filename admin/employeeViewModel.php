<?php

class employeeViewModel{
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

    /**
     * @return mixed
     */
    public function getData()
    {


        $sql = "SELECT * FROM  employee";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            //while($row = $result->fetch_assoc()) {
            //echo $row["eid"]. " " . $row["ename"]. " " . $row["gender"]. "<br>";
            return $result;
        }
        //} else {
        //echo "0 results";
        //}
        $this->conn->close();
    }
    public function editData()
    {


        $sql = "SELECT * FROM  employee";
        $result = $this->conn->query($sql);

    }
}