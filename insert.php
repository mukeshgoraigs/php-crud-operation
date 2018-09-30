<?php
$servername="localhost";
$username="root";
$password="";
$dbname="data";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];

$sql = "INSERT INTO base(name,email,phone,password)
VALUES ('$name','$email','$phone','$password')";

if($conn->query($sql) === TRUE){
 echo "data inserted";
 }
 else {
 echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>