<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "patatjerusland_");

if(isset($_POST["add_to_cart"]))
{
    if(isset($_SESSION["shopping_cart"]))
    {
        $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
        if(!in_array($_GET["id"], $item_array_id))
        {
            $count = count($_SESSION["shopping_cart"]);
            $item_array = array(
                'item_id'			=>	$_GET["id"],
                'item_name'			=>	$_POST["hidden_name"],
                'item_price'		=>	$_POST["hidden_price"],
                'item_quantity'		=>	$_POST["quantity"]
            );
            $_SESSION["shopping_cart"][$count] = $item_array;
        }
    }
    else
    {
        $item_array = array(
            'item_id'			=>	$_GET["id"],
            'item_name'			=>	$_POST["hidden_name"],
            'item_price'		=>	$_POST["hidden_price"],
            'item_quantity'		=>	$_POST["quantity"]
        );
        $_SESSION["shopping_cart"][0] = $item_array;
    }
}

if(isset($_GET["action"]))
{
    if($_GET["action"] == "delete")
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["item_id"] == $_GET["id"])
            {
                unset($_SESSION["shopping_cart"][$keys]);

            }
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu Backend</title>
    <link rel="stylesheet" href="../CSS/styles1.css">
</head>

<body>

<div class="header">
    <p class="footer-links">
        <a href="../index.php">Home</a>
        <a href="../menu.php">Menu kaart</a>
        <a href="../reseveren.php">Reseveren</a>
        <a href="../contact.php">Contact</a>
    </p>
</div>
<div class="center">
    <h1>Hello, Admin</h1>
</div>
<a href="../index.php">Logout</a>
<div class="flextaa">
    <form method="post" action="../includes/menucdu.php">
        <h1>Add hier je product</h1>
        <label>Naam product :</label>
        <input type="text" name="name">
        <label>Price :</label>
        <input type="number" name="image">
        <label>Image :</label>
        <input type="text" name="price">
        <input type="submit" name="submit">
        <img src="../images/logo.png" width= 440px>
    </form>
    <form method="post" action="../includes/menucdu.php">
        <h1>Reageer hier op mailtjes</h1>
        <label>Van :</label>
        <input type="email" name="name">
        <label>Naar :</label>
        <input type="email" name="image">
        <label>Reactie :</label>
        <input type="text" name="price">
        <input type="submit" name="submit">
        <img src="../images/logo.png" width= 440px>
    </form>
</div>
<div class="container">
    <div class="flex">
        <?php
        if (isset($_POST["submit"])) {
            if (!empty($_POST["search"])) {
                $query = "SELECT * FROM tbl_product WHERE name = '".$_POST["zoekbalk"]."'";
                return;
            } else {
                $query = "SELECT * FROM tbl_product ORDER BY id ASC";
            }
        } else {
            $query = "SELECT * FROM tbl_product ORDER BY id ASC";
        }

        $result = mysqli_query($connect, $query);
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                ?>

                <div class="col-md-4">
                    <form method="post" action="../admin/menubackend.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:whitesmoke; border-radius:5px; padding:16px;" >
                            <img src="../images/<?php echo $row["image"]; ?>" class="img-responsive" width="300px" height="150px"  /><br />

                            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Delete" />
                        </div>
                    </form>
                </div>


                <?php
            }
        }
        ?>
    </div>
</div>
</div>
</div>
</body>


</html>
