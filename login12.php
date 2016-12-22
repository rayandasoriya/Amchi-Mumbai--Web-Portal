<?php
$servername = "localhost";
$username = "root";
$password = "riyarayan";
$dbname = "login12";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 //$email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//  $name = test_input($_POST["name"]);
  $email = $_POST["email"];
  $password = $_POST["pass1"];
  }

$sql = "INSERT INTO members (email,password)
VALUES ('$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>