<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
session_start();
$student_id =  $_SESSION['stu_id'];
$job_id =  $_REQUEST['jobId'];
mysqli_query($connection,"INSERT INTO `applied_job`(`job_id`,`student_id`)values('$job_id','$student_id')");
header("Location:list.php");
?>