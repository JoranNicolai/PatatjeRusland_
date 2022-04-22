<?php
include("../includes/connect.php");

global $conn;

if (isset($_POST['delete']) && isset($_POST['id']))
{
    $sql = "DELETE FROM tbl_product WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $_POST['id']);
    $stmt->execute();

    header("Location: menubackend.php");
    exit();
} else {
    header("Location: ../Website/index.php");
    exit();
}
?>