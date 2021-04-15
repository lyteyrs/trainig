<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // var_dump($_POST);
    // exit;
    $id = md5($_POST['email'] . $_POST['password']);
    $file = file_get_contents('file.txt');
    $file = json_decode($file, true);
    // var_dump($_POST);
    if (array_key_exists($id, $file)) {
        header('Location: home.php');
    } else {
        die('invalid login credentials');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post" novalidate>
        Email : <input type="email" name="email" placeholder="Email Address" ><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        <button>Submit</button>
    </form>
</body>
</html>
