<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap-->
   <link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
   integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
   crossorigin="anonymous" referrerpolicy="no-referrer" />
   <link rel="stylesheet" href="style.css">
    <title>REGISTER</title>
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
    <form action="function.php" method="post">
        <h2>REGISTRATION PAGE</h2>
        <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error'] ; ?></p>
        <?php }?>      
        <label>First Name</label>
        <input type="text" name="first_name" placeholder="First Name">
        <label>Last Name</label>
        <input type="text" name="last_name" placeholder="Last Name">
        <label>Email Address</label>
        <input type="email" name="email" placeholder="Email">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password">
        <label>Confirm Password</label>
        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <a href="index1.php" class="btn">Cancel</a>
        <button type="submit">Register</button>
    </form>
    
<!--bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">    

</body>
</html>