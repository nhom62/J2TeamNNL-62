<?php 
    require'../connect.php';
    $producer_id=$_POST['producer_id'];
    $name=$_POST['name'];
    $des=$_POST['des'];
    $color=$_POST['color'];
    $price=$_POST['price'];
    $image=$_POST['image'];
$sql="insert into product(producer_id,name,description,image,price,color) 
      values('$producer_id','$name','$des','$image','$price','$color')";
$run=mysqli_query($conn, $sql);
if($run)
    echo "<script>alert('Insert successful')</script>" ;
    else 
    echo "<script>alert('Insert Unsuccessful')</script> ";
                               