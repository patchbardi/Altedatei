<?php
('Content-Type: application/json');

//Lese vorhandene TODOs
$file = 'todo.json';
if (file_exists($file)){
    $json_Data = file_get_contents($file);
    $todos = json_decode($json_Data, true);
}
else{
       $todos = [];
}
    // Rückgabe der TODOs
    echo json_encode($todos);

