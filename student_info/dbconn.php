<?php
$servername ="localhost";
$username ="root";
$password = "";
$dname = "sysdb";

$con = mysqli_connect($servername, $username, $password, $dname);

if(!$con){
    die("connection Failed" . mysqli_connect_error());
}
//echo "Connected Successfully";