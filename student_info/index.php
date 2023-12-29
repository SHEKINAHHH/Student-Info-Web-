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
   <link rel="stylesheet" href="design.css">
    <title>PHP CRUD APPLICATION</title>
    <style>
         .align{
            position:absolute;
            top:15%;
            right:10%;
            background:red;
            padding: 10px 15px;
            color: white;
            border-radius: 5px;
            margin-right:10px;
            border: none;
            font-size: 50%;
         }
         .btn{
            float: right;
            background-color: green;
            margin-bottom:20px;
            color:white;
        }
    </style>
</head>
<body>
    <form action="/student_info/login/logout.php" method="post">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="color:#009900"><b>
        STUDENT INFORMATION CENTER</b>
 <button type="submit" class="align">LOGOUT</button>
    </nav>
    </form>
    <?php
        if(isset($_GET['msg'])) {
            $msg = $_GET['msg'];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            '.$msg.'
          </div>';
        }
        
        ?>
    <div class="container">
        
        <a href="add.php" class="btn"><b>Add New Student</b></a>

    <table class="table table-hover text-center">
        <thead class="table table-dark">
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Course</th>
                <th scope="col">Year & Section</th>
                <th class="text-info" scope="col">Edit</th>
                <th class="text-info" scope="col">Delete</th>
            </tr>
        </thead>
         <tbody>
            <?php
            include "dbconn.php";

                $sql = "SELECT * FROM student";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    ?>
                      <tr>
                        <td><?php echo $row['first_name']?></td>
                        <td><?php echo $row['last_name']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['course']?></td>
                        <td><?php echo $row['year_section']?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['id'] ?>" class="link-primary"><i class="fa-solid fa-pen-to-square
                            fs-5"></i></a></td>
                           <td> <a href="delete.php?id=<?php echo $row['id'] ?>" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
     </tbody>
    </table>
    
<?php include('footer.php'); ?>