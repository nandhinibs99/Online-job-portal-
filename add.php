<html> 
    <head>
        <title>jobdetails:</title>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    </head>
<body>
        <div class="jumbotron text-center">
        <h1>Add the job post:</h1>
        <form method="post">
        <label><b>Job:</b></label><br>
        <input  type="text" name="job"/><br><br>
        <label><b>Qualification:</b></label><br>
        <input  type="text" name="qualification"/><br><br>
        <label><b>percentage:</b></label><br>
        <input  type="number" name="percentage"/><br><br>
        <label><b>Location:</b></label><br>
        <input  type="text" name="location" /><br><br>
        <label><b>Salary:</b></label><br>
        <input  type="text" name="salary"/><br><br>
        <label><b>Skills:</b></label><br>
        <input  type="text" name="skills"/><br><br>
        <button class="btn btn-success" type="submit" name="btn">ADDJOB</button><br><br>
        <a class="btn btn-secondary" href="list.php">JobList</a><br><br>
        <a class="btn btn-dark" href="logout.php">Logout</a>
        </form>
    </div>
</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
if(isset($_REQUEST["btn"]))
{
    $job=$_REQUEST["job"];
    //echo $job;
    $qualification=$_REQUEST["qualification"];
    //echo $qualification;
    $percentage=$_REQUEST["percentage"];
    //echo $percentage;
    $location=$_REQUEST["location"];
    //echo $location;
     $salary=$_REQUEST["salary"];
    //echo $salary;
    $skills=$_REQUEST["skills"];
    //echo $skills;
    session_start();
    $company_id = $_SESSION['com_id'];
    mysqli_query($connection,"INSERT INTO `addjob`(`company_id`,`job`,`qualification`,`percentage`,`location`,`salary`,`skills`) values('$company_id','$job','$qualification','$percentage','$location','$salary','$skills')");
}
?>
