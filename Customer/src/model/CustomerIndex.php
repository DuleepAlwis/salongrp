<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$service = $_POST['service'];
$beautician = $_POST['beautician'];
$quantity = $_POST['quantity'];
$AppDate = $_POST['AppDate'];
$AppTime = $_POST['AppTime'];
$sql = "INSERT INTO appoinment (service, beautician, quantity, date, time)
VALUES ('$service', '$beautician', $quantity , '$AppDate' , '$AppTime')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>