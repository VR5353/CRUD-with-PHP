
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
    table{
    text-align: center;
    }
    .search .navi {
      display: flex;
      justify-content: space-between;
    
    }
    h1{
     color: red;
    }
    td {
      color: #fff;
    }
    .btn{
        padding: 5px 20px;
        border: 2px solid ;
        border-radius: 20px;
    }
    th {
      color:#FFFF00 ;
    }
    #search {
      display: flex;
      float: right;
      width: 300px;
    }
    .thid{
      color: #FF1E1E;
    }
    .btn-container{
     display: flex;
     justify-content: space-between;
    }
 </style>
</head>

<body>

  <div class="container mt-2">

  <div class="navi">
    <div class="btn-container"  >
    <a href="user.php"><button class="btn btn-outline-primary mx-auto"> Add Data</button></a>
     <a href="display.php"><button class="btn btn-outline-warning" type="home">Home</button></a>
</div>    
<div class="search mt-3">
      <form class="search" role="search" id=search action="" method="GET">
        <input class="form-control me-2" name="search" value="" type="search" placeholder="Search" aria-label="Search" />
        <button class="btn btn-outline-success" type="submit"> Search</button>
      </form>
    </div>
    </div>

    <table class="table mt-5">
      <thead>
        <tr>
          <th scope="col">S no</th>
          <th scope="col">Name</th>
          <th scope="col">Username</th>
          <th scope="col">Phone</th>
          <th scope="col">E-mail</th>
          <th scope="col">City</th>
          <th  scope="col">gender</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
        <?php
        include "connect.php";
        $sql = "select * from `cruddata`";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['id'];
            $name = $row['name'];
            $username = $row['username'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $city = $row['city'];
            $gender = $row['gender'];
          }
}
          
      

        ?>
      </thead>
<tbody>
<?php 
    if(isset($_GET['search']))
    {
        $value = $_GET['search'];
        $sql = "SELECT * FROM cruddata WHERE CONCAT( name , username , mobile , email , city ) LIKE '%$value%'";
        $result = mysqli_query($con , $sql);
        // echo $result;
        if(mysqli_num_rows($result) > 0)
        {
          $sql = "SELECT * FROM cruddata WHERE CONCAT( name , username , mobile , email , city ) LIKE '%$value%'";
          $result = mysqli_query($con, $sql);
          if ($result) 
          {
            while ($row = mysqli_fetch_assoc($result)) 
            {
              $id = $row['id'];
              $name = $row['name'];
              $username = $row['username'];
              $mobile = $row['mobile'];
              $email = $row['email'];
              $city = $row['city'];
              $gender = $row['gender'];
              $password = $row['password'];
              echo '<tr>
    <td scope="row" class="thid">' . $id . '</td>
    <td>' . $name . '</td>
    <td>' . $username . '</td>
    <td>' . $mobile . '</td>
    <td>' . $email . '</td>
    <td>' . $city . '</td>
    <td>' .$gender. '</td>
    <td>' . $password . '</td>
    <td><a href="update.php?updateid=' . $id . '" class="text-light"><button class= "btn btn-outline-primary">Update</button></a> <a href="delete.php?deleteid=' . $id . '" class="text-light"><button class= "btn btn-outline-danger">Delete</button></a></td></tr>';
            }
  }
        }
        else
        {?>
        <h1>No Record Found</h1>
          <?php
        }
      
      }
?>


</tbody>

    </table>

  </div>
</body>

</html>





