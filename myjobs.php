<html>
<a href="list.php">All Jobs list</a>
<br><br>
    <table border="1">
        <tr>
        <th>MyJoBList</th>
        </tr>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
session_start();
$student_id =  $_SESSION['stu_id'];

$select= mysqli_query($connection,"SELECT * FROM `applied_job` WHERE `student_id` = '$student_id' ");

while($row = mysqli_fetch_array($select)){
    $job_id=$row['job_id'];
    $select_job=mysqli_query($connection,"select * from `addjob` where `id`='$job_id'");
    $row_job=mysqli_fetch_array($select_job);
    echo $row_job['job']."<br>";
     echo $row_job['location']."<br>";
 echo $row_job['salary']."<br>";

}
?>
    </table>
</html>
