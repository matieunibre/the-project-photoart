<?php
require("connection.php");
session_start();
$check=false;
if(isset($_GET['username'])){
  if(strcasecmp($_SESSION['adminUsername'],$_GET['username'])==0){
    echo "<script type ='text/javascript'>
    alert('Can not drop an admin')
    location='../client_side/ListAllCustomer.php'
    </script>";
    $check = false;
  }
  $uName=$_GET['username'];
  }
if($check ==true &&$stmt=$con->prepare("DELETE from User where username=?")){
  $stmt->bind_param('s',$uName);
  $stmt->execute();
  echo "<script type ='text/javascript'>
  alert('User has been dropped')
  location='../client_side/ListAllCustomer.php'
  </script>";
}else{
  echo "<script type ='text/javascript'>
  alert('User could Not be dropped')
  location='../client_side/ListAllCustomer.php'
  </script>";
}
$con->close();

 ?>