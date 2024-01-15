<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>My first PHP page</h1>

<?php
$url = 'http://localhost:8080/api/address';
echo file_get_contents($url);
?>
</body>
</html>