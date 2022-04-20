<?php

include_once("../includes/connect.php");

$sql = "DELETE FROM producttb
        WHERE id = :id";

$stmt = $connect->prepare($sql);
$stmt ->bindparam(":id", $_POST['id']);
$stmt ->execute();

header("Location: CRUD.php");
?>