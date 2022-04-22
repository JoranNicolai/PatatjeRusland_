<?php
include_once('../includes/connect.php');

global $conn;

if (isset($_POST["submit"])) {

    $sql = "UPDATE tbl_product SET name = :naam, image = :image, price = :price where id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->bindParam(":naam", $_POST["naam"]);
    $stmt->bindParam(":image", $_POST["image"]);
    $stmt->bindParam(":price", $_POST["price"]);
    $stmt->execute();
    header("location: menubackend.php");

}


