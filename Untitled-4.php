
<?php

session_start();
// Setzt ein Cookie für den Nutzer
setcookie("user", "John Doe", time() + 3600, "/");

// Setzt eine Session-Variable
$_SESSION["role"] = "Admin";

// Zeigt die Informationen an
echo "Cookie gesetzt: " . $_COOKIE["user"] . "<br>";
echo "Session gesetzt: " . $_SESSION["role"];

?>
