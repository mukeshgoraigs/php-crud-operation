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

$id=$_GET['id'];


$sql = "DELETE FROM base WHERE id='$id'";

if($conn->query($sql) === TRUE){
 header("Location: http://localhost/php-project/");
 }
 else {
 echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>