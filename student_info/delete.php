<?php
include "dbconn.php";
$id = $_GET['id'];
$sql = "DELETE FROM student WHERE id = $id";
$result = mysqli_query($con, $sql);
if($result){
    header("Location: index.php?msg=Record deleted successfully");
}
else{
    echo "Failed:" . mysqli_error($con);
}
?>