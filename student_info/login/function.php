<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include "DBconn.php";

    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Perform basic input validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($confirm_password)) {
        header("Location: register.php?error=Please fill in all fields");
        exit();
    }

    if ($password !== $confirm_password) {
        header("Location: register.php?error=Passwords do not match");
        exit();
    }

    // Hash the password for security
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $sql="INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`)
     VALUES (NULL,'$first_name','$last_name','$email','$password')";
    // $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // ... perform database insert ...

    $result = mysqli_query($conn, $sql);
    if($result){
    header("Location: index1.php?msg=User registered successfully");
    exit();
} else {
    // Redirect to the registration form if accessed directly
    header("Location: index1.php");
    exit();
    }
}
?>