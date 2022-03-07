<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <?php include'../menu.php'?>
    <div id="right">
    <div class="title">
                    <div class="title1">ADD PRODUCTS</div>
    </div>
    <div class="add_products">
        <form method="POST" action="process_insert.php">
            <table class="add">
                <td>
                        Name
                </td>
                <tr>
                    <td>
                        <input type="text" name="producer_id">
                    </td>
                </tr>
                <tr>
                    <td>
                        <button>ADD</button>
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