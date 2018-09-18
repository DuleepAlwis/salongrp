<?php

class stockModel{
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


        $sql = "SELECT * FROM  stock";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {

            return $result;
        }
         else {}
        $this->conn->close();
    }
    public function editData()
    {


        $sql = "SELECT * FROM  employee";
        $result = $this->conn->query($sql);

    }
}