<?php
session_start();
$auth=isset($_SESSION['auth']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        background: #efefef;
        font-family: arial, helvetica;
        color: #333;
    }

    #warp {
        width: 500px;
        padding: 20px;
        margin: 10px auto;
        border: 4px solid #ddd;
        background: #fff;
    }

    h1 {
        margin: 0 0 20px 0;
        padding: 0 0 10px 0;
        border-bottom: 1px solid #ddd;
    }

    input[type=text],
    input[type=password] {
        display: block;
        margin-bottom: 10px;
    }

    .msg {
        width: 500px;
        background: #ffd;
        border: 2px solid #dda;
        text-align: center;
        margin: 10px auto;
        font-size: 13px;
        padding: 6px;
    }
    </style>
</head>

<body>
    <div id="wrap">
        <?php if($auth){?>
        <h1>Welcome to my website</h1>
        <p>You see this because you are an authentication user.Congratulations</p>
        <b><?php echo $_SESSION['id']?></b>
        <a href="logout.php">Logout</a>
        }
        <?php } else{?>
        <h1>You need to login</h1>
        <form action="login.php" method="post">
            <label for="id">User ID</label>
            <input type="text" name="id" id="id">

            <label for="password">Password</label>
            <input type="password" name="password" id="password">

            <input type="submit" value="Login">
        </form>
        <?php } ?>
    </div>
</body>

</html>