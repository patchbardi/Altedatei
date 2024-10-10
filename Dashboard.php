<?php

session_start();

// Prüfen, ob eine gültige Session oder ein Cookie vorhanden ist
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    echo "Willkommen, " . $_SESSION['username'] . "!";
} elseif (isset($_COOKIE['username'])) {
    // Benutzer per Cookie identifizieren
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_COOKIE['username'];
    echo "Willkommen zurück, " . $_COOKIE['username'] . "!";
} else {
    echo "Sie sind nicht eingeloggt. Bitte loggen Sie sich ein.";
    echo '<br><a href="login.php">Zum Login</a>';
}
