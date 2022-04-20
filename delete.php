<?php

include("../includes/connect.php");

global $conn;

$id = $_GET['ID'];

echo $id;

$sql = "DELETE FROM tbl_product WHERE id = :id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":id", $id );
$stmt->execute();

redirect("../admin/menubackend.php");