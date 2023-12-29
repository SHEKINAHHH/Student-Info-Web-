<?php
session_start();
include "DBconn.php";
if(isset($_POST['email']) && isset($_POST['password'])) {

   function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
    $email = validate($_POST['email']);
    $pass = validate($_POST['password']);

    if(empty($email)){
        header("Location: /student_info/login/index1.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: /student_info/login/index1.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if($row['email']===$email && $row['password']===$pass){
                $_SESSION['email'] = $row['email'];
                $_SESSION['first_name'] = $row['first_name'];
                $_SESSION['id'] = $row['id'];
                header("Location: /student_info/index.php");
                exit();
            }else{
                header("Location: /student_info/login/index1.php?error=Incorrect User name or Password");
            exit();
            }
        }else{
            header("Location: /student_info/login/index1.php?error=Incorrect User name or Password");
            exit();
        }
    }
}else{
    header("Location: /student_info/login/index1.php?error");
    exit();
}