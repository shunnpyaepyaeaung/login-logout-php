<?php 
    session_start();
    $auth = isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background: #efefef;
        font-family: arial; 
        color: #333;
    }
    #wrap{
        width: 500px;
        padding: 20px;
        margin: 10px auto;
        border: 4px solid #ddd;
        background: #fff;
    }
    h1{
        margin: 0 0 20px 0;
        padding: 0 0 10px 0;
        border-bottom: 1px solid #ddd;
    }
    input[type=text],input[type=password]{
        display: block;
        margin-bottom: 10px;
    }
    .msg{
        width: 500px;
        background: #ffd;
        border: 2px solid #dda;
        text-align: center;
        margin: 10px auto;
        font-size: 13px;
        padding: 6px;
    }
</style>
<body>
    <div id="wrap">
        <?php if ($auth) { ?>
            <h1>Welcome to My Website</h1>
            <p>You see this page becuase you are an authorized user</p>
            <b><?php echo $_SESSION['id'] ?></b>
            <a href="logout.php">Logout</a>
        <?php } else { ?>
            <h1>You need to login first</h1>
            <form action="login.php" method="post">
                <label for="username">Username</label>
                <input name="username" type="text" id="username"/>
                <label for="password">Password</label>
                <input name="password" type="password" id="username"/>
                <input type="submit" value="Login"/>
            </form>
        <?php } ?>
    </div>
    
</body>
</html>