<?php
include('../connect.php');
   $id=$_GET['del'];
   $sql="delete from product where ID='$id'";
   $run=mysqli_query($conn,$sql);
  if($run) header('location:list_products.php');
  else echo "false";
?>