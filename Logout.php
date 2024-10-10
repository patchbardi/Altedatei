<?php
session_start();

// Session und Cookie löschen
session_destroy();
setcookie('username', '', time() - 3600, "/");

echo "Sie wurden erfolgreich ausgeloggt.";
echo '<br><a href="login.php">Erneut einloggen</a>';
