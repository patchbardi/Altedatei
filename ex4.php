<?php
session_start();
 
// Setzt das Cookie, falls es noch nicht existiert
if (!isset($_COOKIE["user"])) {
    setcookie("user", "John Doe", time() + 3600, "/");
    echo "Willkommen, neuer Benutzer! Ein Cookie wurde gesetzt.<br>";
} else {
    echo "Willkommen zurück, " . $_COOKIE["user"] . "!<br>";
}
 
// Setzt eine Session-Variable, falls sie noch nicht existiert
if (!isset($_SESSION["role"])) {
    $_SESSION["role"] = "Gast";
    echo "Ihre Rolle wurde als Gast festgelegt.<br>";
} else {
    echo "Ihre aktuelle Rolle ist: " . $_SESSION["role"] . ".<br>";
}
