<style>
    .msg {border:1px solid #bbb; padding:5px; margin:10px 0px; background:#eee;}
</style>
<?php
class empRegModel
{
    private $id;
    private $name;
    private $gender;
    private $email;
    private $tpno;
    private $address;
    private $jDate;
    private $password;
    private $salary;
    private $conn;
    /**
     * @return mixed
     */


    public function setJdate($jDate)
    {
        $this->jDate = $jDate;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setTpno($tpno)
    {
        $this->tpno = $tpno;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setSalary($salary)

    {

        $this->salary = $salary;
    }

    public function connection(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "salonsystem";

        // Create connection
        $this->conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

    }
    public function insertData()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "salonsystem";

        // Create connection
        $conn = mysqli_connect($servername, $username, $password,$database);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $sql = "INSERT INTO employee (eid,ename,gender,tpno,email,address	,joindate,password,type)
        VALUES ('$this->id', '$this->name','$this->gender', '$this->tpno','$this->email','$this->address','$this->jDate','$this->password','$this->salary')";

        if ($conn->query($sql) === TRUE) {
            echo '<div class="msg">'
                .'New record created successfully'
                .'</div>';
            $_POST = array();
            include "registration.php";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    publiC function checkEmail($email)
    {
        $sql = "SELECT email FROM  employee";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {

            while($row = mysqli_fetch_array($result)){
                if ($email==$row['email']){return true;}


            }
        }
        return false;

        $this->conn->close();
    }
}
