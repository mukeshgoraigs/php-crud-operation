<?php
include 'connection.php';

    $id=$_POST['id'];

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql = "UPDATE base SET name='$name',email='$email',phone='$phone',password='$password' WHERE id=$id";
    $query=mysqli_query($conn,$sql);
    if($query){
     header("Location: http://localhost/php-project/");
     }
     else {
     echo  "Error: " . $sql . "<br>" . $conn->error;
    }

?>