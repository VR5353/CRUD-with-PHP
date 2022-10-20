<?php

include "connect.php";
if (isset($_POST['submit'])) {


  $name =  $_POST['name'];
  $username =  $_POST['username'];
  $mobile =  $_POST['mobile'];
  $email =  $_POST['email'];
  $city =  $_POST['city'];
  $gender = $_POST['gender'];
  $password =  $_POST['password'];


  $sql = "INSERT INTO `cruddata`( `name` , `username` , `mobile` , `email` , `city` ,`gender`, `password` ) VALUES('$name' , '$username' , '$mobile'  , '$email' , '$city' ,'$gender' , '$password' )";
  $result = mysqli_query($con, $sql);
  if ($result) {
    // echo "success-user";
    header('location:display.php');
  } else {
    die("error" . mysqli_error($result));
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>crud operattion </title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <style>
    body {
      background-image: linear-gradient(rgba(0, 0, 0, 0.8)100%, rgba(0, 0, 0, 0.8)100%), url("bg1.jpg");
      background-position: center;
    }

    .gender{
      display: inline-block;

    }

    label {
      color: #fff;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <!-- <button class= "btn btn-primary my-5"> Add Data</button> -->
    <form method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your name" name="name">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Username</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder=" Choose a Username" name="username">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Mobile-No</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your Mobile" name="mobile">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">E-mail</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your email" name="email">
      </div>

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">city</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Add your city" name="city">
      </div> 

     
      <div class=" mb-3">
        <label >Gender</label>
        <label class="form-check-label" for="flexRadioDefault1"  > Male </label>
        <input class="form-check-input" type="radio" name="gender" value="male"  id="flexRadioDefault1" >Male
      </div>
      <div class="mb-3">
        <label class="form-check-label" for="flexRadioDefault2"  >Female</label>
        <input class="form-check-input" type="radio" name="gender" value="Female" id="flexRadioDefault2" >Female
      </div>
        

      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Password</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="choose a Password" name="password">
      </div>

      <button class="btn btn-primary mt-5" name="submit">Submit</button>
    </form>
  </div>
</body>

</html>