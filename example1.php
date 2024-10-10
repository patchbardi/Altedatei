<?php
// Startet eine neue Session oder setzt die bestehende fort
session_start();
// Setzt eine Session-Variable
$_SESSION["user"] = "John Doe";
// Gibt die gesetzte Session-Variable aus
echo "Der Benutzer ist: " . $_SESSION["user"];
?>