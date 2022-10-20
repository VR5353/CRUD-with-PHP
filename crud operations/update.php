<?php

include "connect.php";
$id = $_GET['updateid'];

$sql = "select * from `cruddata` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) {

  $name =  $_POST['name'];
  $username =  $_POST['username'];
  $mobile =  $_POST['mobile'];
  $email =  $_POST['email'];
  $city =  $_POST['city'];
  $gender = $_POST['gender'];
  $password =  $_POST['password'];
  $sql = "UPDATE `cruddata` SET `id`=$id , `name`='$name' , `username`='$username' , `mobile`='$mobile' ,`gender`='$gender', `password`='$password' WHERE `cruddata`.`id` = '$id';";
  $result = mysqli_query($con, $sql);
  if ($result) {
    echo "updated succesfully";
    header('location:display.php');
  }
} else
  echo "hello";
?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud operattion </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <form method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name" name="name" value=<?php echo $row['name'] ?>>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Username</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder=" Choose a Username" name="username" value=<?php echo $row['username'] ?>>
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mobile-No</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your Mobile" name="mobile" value=<?php echo $row['mobile'] ?>>
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mobile-No</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your email" name="email" value=<?php echo $row['email'] ?>>
      </div>
      
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mobile-No</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your city" name="city" value=<?php echo $row['city'] ?>>
      </div>
      <div class="form-group m-3">
        <label >Gender</label>
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" >
        <label class="form-check-label" for="flexRadioDefault1" > Male </label>
        <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" >
        <label class="form-check-label" for="flexRadioDefault2" >Female</label>
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="choose a Password" name="password" value=<?php echo $row['password'] ?>>
      </div>

      <button class="btn btn-primary mt-5" name="update">update</button>
    </form>
  </div>
</body>

</html>