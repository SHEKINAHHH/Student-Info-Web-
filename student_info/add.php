<?php
include "dbconn.php";

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];

    $sql = "INSERT INTO `student`(`id`, `first_name`, `last_name`, `gender`, `address`, `course`, `year_section`) 
    VALUES (NULL, '$first_name', '$last_name', '$gender', '$address', '$course', '$year_section')";

    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: index.php?msg=New student added successfully!");
    }
    else {
        echo "failed" . mysqli_error($con);
    }

}

?>
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
    <title>PHP CRUD APPLICATION</title>
</head>
<body class="text-bg-secondary p-3">

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: khaki ">
        STUDENT INFORMATION CENTER
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>ADD NEW STUDENT</h3>
            <p class="text-muted">Complete the form below to add student</p>
        </div>
        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"><b>First Name</b></label>
                        <input type="text" class="form-control" name="first_name"
                        placeholder="INPUT FIRST NAME">
                    </div>
                    <div class="col">
                        <label class="form-label"><b>Last Name</b></label>
                        <input type="text" class="form-control" name="last_name"
                        placeholder="INPUT LAST NAME">
                    </div>
                </div>
                <div class="mb-3">
                        <label class="form-label"><b>Address</b></label>
                        <input type="text" class="form-control" name="address"
                        placeholder="INPUT ADDRESS">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"><b>Course</b></label>
                        <input type="text" class="form-control" name="course"
                        placeholder="INPUT COURSE">
                    </div>
                    <div class="col">
                        <label class="form-label"><b>Year & Section</b></label>
                        <input type="text" class="form-control" name="year_section"
                        placeholder="INPUT YEAR & sECTION">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label><b>Gender</b></label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                   id="Male" value="Male">
                   <label for="Male" class="form-input-label">Male</label>
                   &nbsp;
                   <input type="radio" class="form-check-input" name="gender"
                   id="Female" value="Female">
                   <label for="Female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>               
                </div>
            </form>
        </div>
    </div>
<!--bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">    
</body>
</html>