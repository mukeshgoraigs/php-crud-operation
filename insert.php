<?php
include 'connection.php';

$name=$_GET['name'];
$email=$_GET['email'];
$phone=$_GET['phone'];
$password=$_GET['password'];

$sql = "INSERT INTO base(name,email,phone,password)
VALUES ('$name','$email','$phone','$password')";
$query=mysqli_query($conn,$sql);
if($query){
 header("Location: http://localhost/php-project/");
 }
 else {
 echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>