<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="createuser.php" method="post">
        Nome: <input required type="text" name="nome"><br>
        Idade: <input required type="number" name="idade"><br>
        Email: <input required type="email" name="email"><br>
        Password: <input minlength="8" required type="password" name="passwd"><br>
        <input type="submit">
    </form>
</body>
</html>