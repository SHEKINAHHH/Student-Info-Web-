<?php
include "DBconn.php";
    
    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "INSERT INTO `users`(`id`, `first_name`, `last_name`, `email`, `password`) 
        VALUES (NULL, '$first_name','$last_name','$email','$password')";
    
        $result = mysqli_query($conn, $sql);

        if($result){
            header("Location: /student_info/index1.php?msg=registered successfully!");
        }
        else {
            echo "failed" . mysqli_error($conn);
        }
    
    }
   ?>

