<?php 
@$name = $_GET["name"]; #With @ browser ignore this code line before execute.
@$lastname = $_GET["lastname"]; #With @ browser ignore this code line before execute.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="DB/insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="">
        <label for="lastname">Lastname:</label>
        <input type="text" name="lastname" id="">
        <label for="phonenumber">Numero telefonico:</label>
        <input type="text" name="phonenumber">
        <label for="email">Corrreo electronico:</label>
        <input type="email" name="email" id="" required>
        <input type="submit" name="" id="" value="Confirmar">
    </form>
</body>
</html>
