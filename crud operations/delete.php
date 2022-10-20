<?php

include"connect.php";

if(isset($_GET['deleteid'])){

     $id=$_GET['deleteid'];
     $sql = "delete from `cruddata` where id=$id";
     $result = mysqli_query($con , $sql);
     if($result){
          // echo "Deleted succesfully";
          header('location:display.php');
     } 
}
