<?php
include "dbconn.php";

$id = $_GET['id'];

if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $year_section = $_POST['year_section'];

    $sql = "UPDATE `student` SET `first_name`='$first_name',`last_name`='$last_name',
    `gender`='$gender',`address`='$address',`course`='$course',`year_section`='$year_section' WHERE id=$id";

    $result = mysqli_query($con, $sql);
    if($result){
        header("Location: index.php?msg=Updated successfully!");
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
    <title>UPDATE STUDENT INFO</title>
</head>
<body class="text-bg-secondary p-3">

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: khaki ">
        STUDENT INFORMATION CENTER
    </nav>
    <div class="container">
        <div class="text-center mb-4">
            <h3>EDIT STUDENT INFORMATION</h3>
            <p class="text-muted">Click Update after changing any information</p>
        </div>

        <?php
        $sql = "SELECT * FROM student WHERE id = $id LIMIT 1";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"><b>First Name</b></label>
                        <input type="text" class="form-control" name="first_name"
                        value="<?php echo $row['first_name']?>">
                    </div>
                    <div class="col">
                        <label class="form-label"><b>Last Name</b></label>
                        <input type="text" class="form-control" name="last_name"
                        value="<?php echo $row['last_name']?>">
                    </div>
                </div>
                <div class="mb-3">
                        <label class="form-label"><b>Address</b></label>
                        <input type="text" class="form-control" name="address"
                        value="<?php echo $row['address']?>">
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label"><b>Course</b></label>
                        <input type="text" class="form-control" name="course"
                        value="<?php echo $row['course']?>">
                    </div>
                    <div class="col">
                        <label class="form-label"><b>Year & Section</b></label>
                        <input type="text" class="form-control" name="year_section"
                        value="<?php echo $row['year_section']?>">
                    </div>
                </div>
                <div class="form-group mb-3">
                    <label><b>Gender</b></label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                   id="Male" value="Male" <?php echo ($row['gender']=='Male')?"checked":""; ?>>
                   <label for="Male" class="form-input-label">Male</label>
                   &nbsp;
                   <input type="radio" class="form-check-input" name="gender"
                   id="Female" value="Female" <?php echo ($row['gender']=='Female')?"checked":""; ?>>
                   <label for="Female" class="form-input-label">Female</label>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>               
                </div>
            </form>
        </div>
    </div>
<!--bootstrap-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">    
</body>
</html>