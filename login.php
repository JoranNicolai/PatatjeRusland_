<?php ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="CSS/styles1.css">
</head>
<body>

<div class="div109">
    <div class="container">

    <form method="post" action="includes/loginbackend.php">
        <h1>Login</h1>
        <label>User Name :</label>
        <input type="text" name="name" placeholder="Naam">
        <label>Password :</label>
        <input type="password" name="wachtwoord" placeholder="Wachtwoord">
        <button name="submit" type="submit">Login</button>
        <img src="images/logo.png" width= 440px>
    </form>
    </div>
</div>
</body>
</html>
