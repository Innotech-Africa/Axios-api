<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
header("Access-Control-Allow-Origin: *" );
header("Access-Control-Allow-Headers: *" );


include 'connect.php';

//echo file_get_contents('php://input');
$data = json_decode(file_get_contents('php://input'), true);
// echo $data['email'];

$email=$data['email'];
$password=$data['password'];
$name=$data['name'];
$surname=$data['surname'];

// echo $email;

$sql = "INSERT INTO users (first_name, last_name, email,password)
VALUES ('$name', '$surname', '$email','$password')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


