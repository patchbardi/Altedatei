<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fetch JSON Test</title>
</head>
<body>
 
    <h1>fetch JSON Test</h1>
 
    <select id="userSelect" name="user"></select>
    <script>
    fetch("http://172.19.112.235/getjson.php")
        .then(response => response.json())
        .then(data => {
            let select = document.getElementById('userSelect');
            data.forEach(user => {
            let option = document.createElement('option');
            option.value = user.email;
            option.textContent = user.name;
            select.appendChild(option);
            });
        })
        .catch(error => console.error('Fehler:', error));
    </script>
 
</body>
</html>