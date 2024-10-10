<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat test</title>
</head>
<body>

<h1>Say hello</h1>

<?php

$name = "empty";

echo "GET: " . var_dump($_GET) . "<br>";
echo "POST: " . var_dump($_POST) . "<br>";

$name = $_POST["name-to-php"];

echo "hello $name";

?>

</body>
</html>