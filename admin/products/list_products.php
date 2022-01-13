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
                    <table class="products">
                        <tr>
                            <th>PICTURE</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>COLOR</th>
                            <th>PRICE</th>
                            <th>UPDATE</th>
                            <th>DELETE</th>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://cdn.shopify.com/s/files/1/0087/6193/3920/products/115615_BROW_1_0b79ee2f-fc03-44c6-91db-04cd08df4f48_720x.jpg?v=1634082791" alt="">
                            </td>
                            <td>PRIMALOFT QUILTED VEST</td>
                            <td>
                                Quilted vest with Primaloft insulation. #8 YKK Vislon two-way zipper, 2x2 rib collar, Lycra-bound pockets, and a pointed front hem. Finished with Stüssy logo embroidery on left chest and Primaloft flag label at side seam.
                            </td>
                            <td>Brown</td>
                            <td>100$</td>
                            <td><a href="#">Update</a></td>
                            <td><a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>