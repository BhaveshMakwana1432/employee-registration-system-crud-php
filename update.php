<?php
include 'connect.php';
$id = $_GET['updateid'];

$sql = "select * from `crud`";
    $result = mysqli_query($conn,$sql);
    $row =mysqli_fetch_assoc($result);
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $password = $row['password'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql = "update `crud` set id=$id, name='$name',email = '$email',mobile='$mobile',password='$password' where id=$id";
  $result = mysqli_query($conn,$sql);
  if($result){
    
    echo "update successfullly";
    header('location:display.php');

  }

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<div class="container my-5">
<form method="post" class="py-4">
  <div class="form-group">
    <label>Name : </label>
    <input value=<?php echo "$name"?> name="name" type="text" class="form-control" placeholder="Enter your name" autocomplete="off">
   </div>
   <div class="form-group py-3">
    <label>Email : </label>
    <input value=<?php echo "$email"?> name="email" type="email" class="form-control" placeholder="Enter your Email" autocomplete="off">
   </div>
   <div class="form-group py-3">
    <label>Mobile : </label>
    <input value=<?php echo "$mobile"?> name="mobile" type="text" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off">
   </div>
   <div class="form-group py-3">
    <label>Password : </label>
    <input value=<?php echo "$password"?> name="password" type="password" class="form-control" placeholder="Enter your Password">
   </div>
  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
</body>
</html>