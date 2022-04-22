<?php

include_once("includes/connect.php");

global $conn;

$sql = "UPDATE producttb 
        SET product_name = :product_name, product_price = :product_price, product_image = :product_image
        WHERE id = :id";

$stmt = $conn->prepare($sql);
$stmt ->bindparam(":id", $_POST['id']);
$stmt ->bindparam(":product_name", $_POST['product_name']);
$stmt ->bindparam(":product_price", $_POST['product_price']);
$stmt ->bindparam(":product_image", $_POST['product_image']);
$stmt ->execute();

header("Location: menubackend.php");
