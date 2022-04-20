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

    <!DOCTYPE html>
    <html>
    <head>
        <title>Search</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="CSS/styles.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="containerfixed">
        <div class="images">
            <img src="images/output-onlinepngtools(1).png" width="200px" height="120px">
        </div>
        <section class="stage">
            <div class="responsive1">
                <div class="random">
                    <a href="index.php"><div id="home" class="div"><p id="homep" class="p">Home</p></div></a>
                </div>
                <div class="random">
                    <a href="menu.php"><div class="div" id="about"><p class="p">Menu Kaart</p>
                        </div></a>
                </div>

                <div class="random">
                    <a href="reseveren.php"><div class="div" id="reseveren"><p class="p">Reseveren</p>
                        </div></a>
                </div>
                <div class="random">
                    <a href="overons.php"><div class="div" id="gallery"><p class="p">Over ons</p>
                        </div></a>
                </div>
                <div class="random">
                    <a href="contact.php"><div class="div" id="resevation"><p class="p">Contact</p>
                        </div></a>
                </div>
                <div class="random">
                    <a href="login.php"> <div class="div2" onclick="document.getElementById('id01').style.display='block'" id="resevation"><p class="p">login</p>
                        </div></a>
                </div>

            </div>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="/action_page.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="images/logo.png" alt="">
                    </div>

                    <div class="container1">
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="psw"><b>Email</b></label>
                        <input type="email" placeholder="Enter Email" name="email" required>

                        <button class="container100"  type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label>
                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <span class="psw">Forgot <a href="#">password?</a></span>
                    </div>
                </form>
    </div>

    <br />


            </div>
    <div class="conatainer6098">
    <head>
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    </head>

    <body>
    <div class="search-container">
        <input type="text" name="search" placeholder="Search..." class="search-input">
    </div>
        <a href="search.php"<i class="fas fa-search"></i></a>

    </body>
    </div>
    </div>

    <div class="container">
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
                    <form method="post" action="menu.php?action=add&id=<?php echo $row["id"]; ?>">
                        <div style="border:1px solid #333; background-color:whitesmoke; border-radius:5px; padding:16px;" >
                            <img src="images/<?php echo $row["image"]; ?>" class="img-responsive" width="300px" height="150px"  /><br />

                            <h4 class="text-info"><?php echo $row["name"]; ?></h4>

                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

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

    <div class="menucontainer">
    <h3>Order Details</h3>
    <div class="table-responsive">
        <table class="table table-bordered">
            <tr>
                <th width="40%">Product</th>
                <th width="10%">Aantal</th>
                <th width="20%">Prijs</th>
                <th width="15%">Totaal</th>
                <th width="5%"></th>
            </tr>

    </div>
            <?php
            if(!empty($_SESSION["shopping_cart"]))
            {
                $total = 0;
                foreach($_SESSION["shopping_cart"] as $keys => $values)
                {
                    ?>
                    <tr>
                        <td><?php echo $values["item_name"]; ?></td>
                        <td><?php echo $values["item_quantity"]; ?></td>
                        <td>€ <?php echo $values["item_price"]; ?></td>
                        <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
                        <td><a href="menu.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                    </tr>
                    <?php
                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                }
                ?>
                <tr>
                    <td colspan="3" align="right">Total</td>
                    <td align="right">€ <?php echo number_format($total, 2); ?></td>
                    <td></td>
                </tr>
                <?php
            }
            ?>

        </table>
    </div>
    <br />
    <div class="buttonbestel">
        <a href="versturen.php"><button>Maak bestelling</button></a>
    </div>
    </body>
    </html>
<?php

if (isset($_POST["sumbit"])){
    $str = $_POST["search"];
    $sth = $connect->prepare("SELECT * FROM `search` where name = '$str'");

    $sth->setFetchMode(PDO:: FETCH_OBJ);
    $sth -> execute();

    if($row = $sth->fetch())
    {
        ?>
        <br><br><br>
        <table>
            <tr>
                <th>name</th>
                <th>description</th>
            </tr>
            <tr>
                <td><?php echo $row->name; ?></td>
                td><?php echo $row->description; ?></td>
            </tr>
        </table>
<?php
    }

        else {
            echo "name does not exist";
    }
}

?>
