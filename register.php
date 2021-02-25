<html>
<title>ONLINEJobPORTAL</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
<body>
    <div class="jumbotron text-center">
    <h1 >Register here for Jobs:</h1>
    <form method="post" >
        <label><b>FirstName:</b></label><br>
        <input type="text" name="firstname" placeholder="Enter your Firstname"/><br><br>
        <label><b>LastName:</b></label><br>
        <input type="text" name="lastname" placeholder="Enter your Lastname"/><br><br>
        <label><b>UserName:</b></label><br>
        <input type="text" name="username" placeholder="Enter your Username"/><br><br>
        <label><b>Password:</b></label><br>
        <input type="password" name="password" placeholder="Enter your Password"/><br><br>
        <label><b>DateOfBirth:</b></label><br>
        <input type="date" name="dateofbirth"/><br><br>
        <label><b>E-mailId:</b></label><br>
        <input type="email" name="email" placeholder="Enter your E-mailid"/><br><br>
        <label><b>Age:</b></label><br>
        <input type="number" name="age" placeholder="Enter your age"/><br><br>
        <label><b>Contactnumber:</b></label><br>
        <input type="number" name="number" placeholder="Enter your number"/><br><br>
        <label><b>Qualification:</b></label><br>
        <input type="text" name="Qualification" placeholder="Enter your Qualification"/><br><br>
        <label><b>PercentageMarks:</b></label><br>
        <input type="number" name="percentage" placeholder="Enter your Percentagemarks"/><br><br>
        <button class="btn btn-primary"type="submit" name="btn">REGISTER</button><br><br>
                <a href="login.php">LoginPage</a>

    </form>
    </div>
</body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
if(isset($_REQUEST["btn"]))
{
    $firstname=$_REQUEST["firstname"];
    echo $firstname;
    $lastname=$_REQUEST["lastname"];
    echo $lastname;
    $username=$_REQUEST["username"];
    echo $username;
    $password=$_REQUEST["password"];
    echo $password;
    $dateofbirth=$_REQUEST["dateofbirth"];
    echo $dateofbirth;
    $email=$_REQUEST["email"];
    echo $email;
    $age=$_REQUEST["age"];
    echo $age;
    $number=$_REQUEST["number"];
    echo $number;
    $Qualification=$_REQUEST["Qualification"];
    echo $Qualification;
    $percentage=$_REQUEST["percentage"];
    echo $percentage;
    mysqli_query($connection,"INSERT INTO `student`(`firstname`,`lastname`,`username`,`password`,`dateofbirth`,`email`,`age`,`number`,`Qualification`,`percentage`) values('$firstname','$lastname','$username','$password','$dateofbirth','$email','$age','$number','$Qualification','$percentage')");
}   
?>