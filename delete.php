<?php

include 'connection.php';

$id=$_GET['id'];


$sql = "DELETE FROM base WHERE id='$id'";
$query=mysqli_query($conn,$sql);
if($query){
 header("Location: http://localhost/php-project/");
 }
 else {
 echo  "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>