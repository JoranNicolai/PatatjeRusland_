<?php
if (isset($_POST['submit'])) {
    if ($_POST['lengte'] > 2) {
        $lengte = $_POST['lengte'] / 100;
    } else {
        $lengte = $_POST['lengte'];
    }
    $gewicht = $_POST['kilogram'];
    $bmi = round($gewicht / ($lengte * $lengte), 1);
    echo($bmi);
}
?>
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
<form id="formulier">
    <label>Username</label>
    <input type="text" name="username" />
    <label>Password</label>
    <input type="text" name="password" />

    <button type="submit">login</button>
</form>
<script src="JS/test.js"></script>
</body>
</html>