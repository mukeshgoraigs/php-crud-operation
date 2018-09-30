<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php-crud operation</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="container-fluid">
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
while($row=mysqli_fetch_row($rs)) { ?>

<tr>
    <td style='width: 200px;'><?php echo $row['1']; ?></td><td style='width: 600px;'><?php echo $row['2']; ?></td><td><?php echo $row['3']; ?></td><td><?php echo $row['4']; ?></td>
    <td><a href="update.php?id=<?php echo $row['0']; ?>"><button type="button" class="btn btn-primary" >Edit</button></a>&nbsp;&nbsp;&nbsp<a href="delete.php?id=<?php echo $row['0']; ?>"><button type="button" class="btn btn-danger" >Delete</button></a></td>
  </tr>


<?php } ?>


</table>
</div>

<form method="GET" name="update" action="insert.php">

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