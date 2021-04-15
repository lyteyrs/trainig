<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
</head>
<body>
<h3>Welcome</h3>
    <form action="logout.php" method="post">
    <input type="hidden" name="logout">
        <a href="logout.php" name='logout'>Log Out</a>
    </form>
</body>
</html>
