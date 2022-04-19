<?php

include("connectlogin.php");

function redirect($url) {
    ob_start();
    header('Location: ' . $url);
    ob_end_flush();
    die();
}

global $conn;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $wachtwoord = $_POST['wachtwoord'];
    if (empty($name) || empty($wachtwoord)) {
        echo "hoi";
        redirect("../index.php");
    } else {
        $get = "SELECT * FROM users where user_name = '$name' AND password = '$wachtwoord'";
        $result = $conn->prepare($get);
        $result->execute();
        if ($result->rowCount() == 1) {
            echo "hoi";
            redirect("../admin/homebackend.php");
        } else {
            echo "error";
            redirect("../index.php");
        }
    }
} else {
    echo "error";
    redirect("../index.php");
}
