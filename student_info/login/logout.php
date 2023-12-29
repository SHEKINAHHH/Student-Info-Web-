<?php
session_start();

session_unset();
session_destroy();

header("Location: /student_info/login/index1.php");