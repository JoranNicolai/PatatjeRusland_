<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
<div class="container">
<h1>Uw zoek resultaat is:</h1>
</div>
<div class="container">

<div class="col-md-4">
    <form method="post" action="menu.php?action=add&id=<?php echo $row["id"]; ?>">
        <div style="border:1px solid #333; background-color:whitesmoke; border-radius:5px; padding:16px;" >
            <img src="images/Mexicano-XXL-630x302.png" class="img-responsive" width="300px" height="150px"  /><br />

            <h4 class="text-info">Mexicano</h4>

            <h4 class="text-danger">€ 2.20</h4>

            <input type="text" name="quantity" value="1" class="form-control" />

            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

        </div>
    </form>
</div>
</div>
</body>
</html>