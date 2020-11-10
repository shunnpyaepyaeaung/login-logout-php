<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php 
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username ="admin" && $password ="123"){
        $_SESSION['auth'] = true;
        $_SESSION['username'] = 'Admin';
    }
    header('location: index.php')
   ?>
</body>
</html>