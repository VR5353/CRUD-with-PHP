<?php 

$user = "root";
$pass = "";
$server = "localhost";
$dbname = "crudoperation";


$con =  new mysqli($server , $user ,$pass ,$dbname);
if($con){
//   echo "success-connect";

}
 else{
  die("error".mysqli_error($result));
 }
