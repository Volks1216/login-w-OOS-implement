<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Login</p>
    <form action="index.php" method="post">
        Username
        <input type="text" name="username"><br>
        Password
        <input type="password" name="password"> <br>
        <input type="submit" name="login" value="login">
    </form>
<?php
include("login.php");
?>
</body>
</html>