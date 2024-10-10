<?php
// Funktion zur Umrechnung des Katzenalters in Menschenjahre
function katzenAlterInMenschenjahren($katzenAlter) {
    if ($katzenAlter == 1) {
        return 15; // 1 Jahr = 15 Menschenjahre
    } elseif ($katzenAlter == 2) {
        return 24; // 2 Jahre = 24 Menschenjahre
    } elseif ($katzenAlter > 2) {
        return 24 + ($katzenAlter - 2) * 4; // Jedes weitere Jahr = +4 Menschenjahre
    } else {
        return 0; // Ungültige Eingabe
    }
}

// Katzenalter eingeben
$katzenAlter = 4;
$menschenjahre = katzenAlterInMenschenjahren($katzenAlter);

echo "Die Katze ist $katzenAlter Jahre alt. In Menschenjahren ist sie $menschenjahre Jahre alt.\n";

// Altersbereich der Katze bestimmen
if ($menschenjahre < 18) {
    echo "Die Katze ist ein Kind.\n";
} elseif ($menschenjahre < 40) {
    echo "Die Katze ist ein junger Erwachsener.\n";
} elseif ($menschenjahre < 60) {
    echo "Die Katze ist im mittleren Alter.\n";
} else {
    echo "Die Katze ist ein Senior.\n";
}
?>




<?php
// Array von Katzennamen
$katzenNamen = ["Luna", "Milo", "Simba", "Nala", "Felix"];

// Ausgabe der Katzennamen
echo "Katzennamen:\n";
foreach ($katzenNamen as $name) {
    echo "- $name\n";
}
?>

