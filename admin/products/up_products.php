<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php include'../menu.php'?>
    <div id="right">
    <div class="title">
                    <div class="title1">UPDATE PRODUCTS</div>
    </div>
    <div class="add_products">
    <?php
                        require '../connect.php';
                        $id=$_GET['up'];
                        $se_product="select * from product where ID='$id'";
                        $run=mysqli_query($conn,$se_product);
                        $result=mysqli_fetch_array($run);
                        ?>
        <form method="POST" action="process_up_products.php">
            <table class="add">
            <input type="hidden" name="id" value="<?php echo $result['ID']; ?>">
                <tr>
                    <td>Producer</td>
                    <td>
                        <input type="text" name="producer_id" value="<?php echo $result['PRODUCER_ID']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value="<?php echo $result['NAME']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Description</td>
                    <td>
                        <textarea name="des" ><?php echo $result['DESCRIPTION']; ?></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Picture</td>
                    <td>
                        <input type="text" name="image" value="<?php echo $result['IMAGE']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Color</td>
                    <td>
                        <select name="color">
                            <option selected="selected"><?php echo $result['COLOR']; ?></option>
                            <option>Black</option>
                            <option>White</option>
                            <option>Brown</option>
                            <option>Pink</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="number" name="price" value="<?php echo $result['PRICE']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button name="bottom">UPDATE</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    </div>
    </div>
</body>
</html>