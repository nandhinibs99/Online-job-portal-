<a href="list.php">All Jobs list</a>
<h1>AppliedStudents</h1>
<br><br>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
session_start();
$job_id =  $_REQUEST['jobId'];
$select= mysqli_query($connection,"SELECT * FROM `applied_job` WHERE `job_id` = '$job_id' ");
while($row = mysqli_fetch_array($select)){
    $student_id =  $row['student_id'];
    //echo $student_id;
    $select_student=mysqli_query($connection,"select * from `student` where `id`='$student_id'");
    $row_student=mysqli_fetch_array($select_student);
    echo $row_student['firstname']."<br>";
}
?>

