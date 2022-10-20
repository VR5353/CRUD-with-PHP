
<!-- <?php 
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
              $password = $row['password'];
              echo '<tr>
    <td scope="row" class="thid">' . $id . '</td>
    <td>' . $name . '</td>
    <td>' . $username . '</td>
    <td>' . $mobile . '</td>
    <td>' . $email . '</td>
    <td>' . $city . '</td>
    <td>' . $password . '</td>
    <td><button class= "btn btn-primary"><a href="update.php?updateid=' . $id . '" class="text-light">Update</a></button> <button class= "btn btn-danger"><a href="delete.php?deleteid=' . $id . '" class="text-light">Delete</a></button></td></tr>';
            }
  }
        }
        else
        {
          echo "no record found";
        }
      
      }
?> -->
