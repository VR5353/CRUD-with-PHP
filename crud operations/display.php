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

    table {
      text-align: center;
    }

    td {
      color: #fff;
    }

    th {
      color: #FFFF00;
    }

    .search {
      display: flex;
      float: right;

    }

    .btn {
      padding: 5px 20px;
      border: 2px solid;
      border-radius: 20px;
    }

    h1 {
      color: #fff;
    }

    .thid {
      color: #FF1E1E;
    }

    #pagination {
      width: 40px;
      height: 40px;
      display: inline-block;
      background-color: #fff;
      border: 2px solid #000;
      text-align: center;
      padding: 5px;
      color: blue;
      border-radius: 10px;

    }
  </style>
</head>

<body>







  <div class="container mt-5">
    <a href="user.php"> <button class="btn btn-outline-primary mt-5 mx-auto"> Add Data</button></a>
    <div class="search">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Dropdown button
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
      </div>
      <form class="search m-5" role="search" id=search action="search.php" method="GET">
        <a href="search.php"><button class="btn btn-outline-success" type="submit">Search</button></a>
      </form>
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
          <th scope="col">Gender</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>



      </thead>
      <tbody>


      </tbody>
      <?php
      include "connect.php";

      $sql = "select * from `cruddata`";
      $result = mysqli_query($con, $sql);
      if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {


          $results_per_page = 5;

          $number_of_result = mysqli_num_rows($result);

          $number_of_page = ceil($number_of_result / $results_per_page);


          if (!isset($_GET['page'])) {
            $page = 1;
          } else {
            $page = $_GET['page'];
          }

          $page_first_result = ($page - 1) * $results_per_page;

          $query = "SELECT *FROM cruddata LIMIT " . $page_first_result . ',' . $results_per_page;
          $result = mysqli_query($con, $query);


          while ($row = mysqli_fetch_assoc($result)) {
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
      ?>
    </table>
    <?php

    for ($page = 1; $page <= $number_of_page; $page++) {


      // echo '<a href = "display.php?page=' . $page . '">' . $page . ' </a>';
      echo
      '
   <a id=pagination class="page-link" href = "display.php?page=' . $page . '">' . $page . '</a>';
    }
    ?>
    <nav aria-label="Page navigation example">

    </nav>

  </div>
</body>

</html>