<html>
<head>

    <meta charset="UTF-8">
    <title>php-crud operation</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>


<?php
include 'connection.php';

$id=$_GET['id'];
$s1="select * from base where id=$id";
$query=mysqli_query($conn,$s1);
$row=$query->fetch_assoc();
echo '
<form method="POST" name="updatefetch" action="updateuser.php">
 <div class="row ">
            <div class="col-md-4 offset-4">
            <div class="form-group">

                                <input type="hidden" class="form-control" name="id" value="'.$row['id'].'" required>
                            </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="'.$row['name'].'" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" class="form-control" name="email" value="'.$row['email'].'" required>
                </div>
                <div class="form-group">
                    <label>Mobile no</label>
                    <input type="text" class="form-control" name="phone" value="'.$row['phone'].'" required>
                </div><div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" value="'.$row['password'].'" required>
            </div>
                <div class="form-group">
                    <input class="btn btn-primary" name="submit" type="submit" id="update" value="update" />
                </div>
            </div>
            </div>
        </div>
    </form>
    ';



 ?>



</body>
</html>