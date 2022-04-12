<?php

use PHPMailer\PHPMailer\PHPClasse\Mail;

include("Mail.php");

function redirect($url) {
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

$mail = new Mail();

global $conn;

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensen = $_POST['aantal'];
    $datetime = $_POST['date'];
    if ($name == '' || $email == '' || $mensen == '') {
        $error = 'Vul alle velden in!';
    } else {
        if (is_numeric($mensen)) {
            if ($mensen > 20 || $mensen <= 0 ) {
                $error = "Max 20 man!";
            } else {
                $error = "Reservering geplaats";
                $sql = "INSERT INTO reserveren (email, naam, opmerking, mensen, datum) VALUES ('$email', '$name', '$mensen', '$datetime')";
                $conn->exec($sql);
                $mail->send_mail($email, "Reservering", "U hebt een reservering gemaakt voor ". $mensen .", op de naam van ". $name
                    ,"Reservering", $name);
                redirect("../reserveren.php");
            }
        } else {
            $error = 'Mensen moeten als nummer!';
        }
    }
}


