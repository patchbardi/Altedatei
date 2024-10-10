<?php
if ($_SERVER["REQUEST_METHOD"]  == "POST"){
    $email = $_POST['email'];
    echo "Ihre E-mail-Adresse lautet: " . htmlspecialchars($email);
}

if ($_SERVER["REQUEST_METHOD"]  == "GET"){
    $email = $_GET['email'];
    echo "Ihre E-mail-Adresse lautet: " . htmlspecialchars($email);
}

