<?php
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload arquivo</title>
</head>
<body>
    <form action="uploads.php" method="POST" encytype="multipart/form-data">
        <input type ="file" name="arquivo">
        <input type="submit" value="enviar">
</body>
</html>