<?php 
    $id=$_POST['id'];
    $producer_id=$_POST['producer_id'];
    $name=$_POST['name'];
    $des=$_POST['des'];
    $color=$_POST['color'];
    $price=$_POST['price'];
    $image=$_POST['image'];
require'../connect.php';
$sql="update product
set
PRODUCER_ID='$producer_id',
NAME='$name',
DESCRIPTION='$des',
IMAGE='$image',
PRICE='$price',
COLOR='$color'
where 
ID='$id'";
$run=mysqli_query($conn,$sql);
if($run)
    header('location:list_products.php');
    else 
    echo "<script>alert('Insert Unsuccessful')</script> ";
                               