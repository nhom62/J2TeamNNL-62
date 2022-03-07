<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body> 
<?php include'../menu.php'?>
            <div id="right">
                <div class="title">
                    <div class="title1">LIST OF PRODUCTS</div>
                    <div class="title2">
                        <div>
                            <a href="add_products.php"><button>Add products</button></a>
                        </div>
                    </div>
                </div>
                <div class="list_product">
                <?php
                        require '../connect.php';
                        $se_product="select * from product";
                        $run=mysqli_query($conn,$se_product);
                        ?>
                    <table class="products">
                        <tr>
                            <th>ID</th>
                            <th>PICTURE</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>COLOR</th>
                            <th>PRICE</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        <?php
                        foreach($run as $se)
                        {
                        ?>
                        <tr>
                            <td>
                                <?php echo $se['ID']; ?>
                            </td>
                            <td>
                                <img src="<?php echo $se['IMAGE']; ?>" alt="">
                            </td>
                            <td><?php echo $se['NAME']; ?></td>
                            <td><?php echo $se['DESCRIPTION']; ?></td>
                            <td><?php echo $se['COLOR']; ?></td>
                            <td><?php echo $se['PRICE']; ?></td>
                            <td><a href="up_products.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del_products.php?del=<?php echo $se['ID'];?>">Delete</a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>