<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
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

$s1="select * from base";
$rs=mysqli_query($conn,$s1);
//pre_r($sql);
//pre_r($sql->fetch_assoc());
//pre_r($sql->fetch_assoc());
//pre_r($sql->fetch_assoc());
?>
<div class="row justify-content-center">
<table class="table">
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile no</th>
<th>Password</th>
<th colspan="2">Action</th>
</tr>
</thead>
<?php

while($row=mysqli_fetch_row($rs))
{
echo "<pre>
Name : $row[0]<br />
Email : $row[1]<br />
Mobile no : $row[2]<br />
Password : $row[3]<br />
</pre>";
}
?>
</table>
</div>
<form method="POST" action="insert.php">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-4 offset-4">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" required>
                </div>
                <div class="form-group">
                    <label>Mobile no</label>
                    <input type="text" class="form-control" name="phone" required>
                </div><div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" required>
            </div>
                <div class="form-group">
                    <button class="btn btn-primary" name="submit" type="submit">Register</button>
                </div>
            </div>
        </div>
    </div>

</form>
</body>
</html>