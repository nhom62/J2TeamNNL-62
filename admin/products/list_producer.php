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
                    <div class="title1">LIST OF PRODUCER</div>
                    <div class="title2">
                        <div>
                            <a href="add_producer.php"><button>Add producer</button></a>
                        </div>
                    </div>
                </div>
                <div class="list_product">
                <?php
                        include '../connect.php';
                        global $conn;
                        $se_product="select * from producer";
                        $run=mysqli_query($conn,$se_product);
                        ?>
                    <table class="products">
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                        </tr>
                        <?php
                        foreach($run as $se)
                        {
                        ?>
                        <tr>
                            <td><?php echo $se['ID']; ?></td>
                            <td><?php echo $se['NAME']; ?></td>
                            <td><a href="up_producer.php?up=<?php echo $se['ID'];?>">Update</a></td>
                            <td><a href="process_del_producer.php?del=<?php echo $se['ID'];?>">Delete</a></td>
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