<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $file = file_get_contents('file.txt');
    $file = json_decode($file, true);
    $id = md5($_POST['email'] . $_POST['password']);
    $new = array($id => array('email' => $email, 'password' => $password));
    // var_dump($_POST);

    $db = json_encode($new, JSON_FORCE_OBJECT);

    $filename = ('file.txt');
    $fp = fopen($filename, 'w');
    fwrite($fp, $db);

    die('Registration sucessful');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="post">
        Full Name: <input type="text" name="fullname" placeholder="Enter your Full name"><br>
        Email : <input type="email" name="email" placeholder="Email Address" ><br>
        Password: <input type="password" name="password" placeholder="Password"><br>
        Confirm Password:  <input type="password" name="cpassword" placeholder="Password"><br>
        <button>Submit</button>
    </form>
</body>
</html>
