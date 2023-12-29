<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log in</title>
    <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <style>
         .btn{
    float:right;
    background: green;
    padding: 10px 15px;
    color: #fff;
    border-radius: 5px;
    margin-right: 10px;
    border: none;
    }
    </style>
</head>
<body>
<?php if(isset($_GET['msg'])) {?>
            <p class="msg"><?php echo $_GET['msg'];?></p>
        <?php }?>
    <form action="login.php" method="post">
        <h2>LOG IN</h2>
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'] ; ?></p>
        <?php }?>      
        <lable>Email</label>
        <input type="email" name="email" placeholder="Email"><br>

        <lable>Password</label>
        <input type="password" name="password" placeholder="Password"><br>

        <button type="submit">Login</button>
        <a href="register.php" class="btn">Register</a>
    </form>
</body>
</html>