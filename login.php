<?php
session_start();

// Feste Benutzerdaten
$valid_username = 'Louise';
$valid_password = 'Mamere';

// Benutzername und Passwort können optional über GET-Parameter übergeben werden
$username = isset($_GET['username']) ? $_GET['username'] : $valid_username;
$password = isset($_GET['password']) ? $_GET['password'] : $valid_password;

if ($username === $valid_username && $password === $valid_password) {
    // Benutzer einloggen, Session starten
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;

    // Cookie setzen für 7 Tage (604800 Sekunden)
    setcookie('username', $username, time() + 604800, "/");

    echo "Login erfolgreich! Willkommen, " . $username . ".";
    echo '<br><a href="Dashboard.php">Zum Dashboard</a>';
} else {
    echo "Ungültiger Benutzername oder Passwort.";
}
