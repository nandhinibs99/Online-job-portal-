<html>
<head>
    <title>LOGIN</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
</head>
<body>
        <div class="jumbotron text-center">

    <h1>LOGIN:</h1>
    <form method="post">
        <label><b>UserName:</b></label><br>
        <input type="text" name="username" placeholder="Enter your Username"/><br><br>
        <label><b>Password:</b></label><br>
        <input type="password" name="password" placeholder="Enter your Password"/><br><br>
        <button class="btn btn-success" type="submit" name="btn">LOGIN</button><br><br>
                <a href="register.php">NewRegistration</a>
    </form>
    </div>
    </body>
</html>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
if(isset($_REQUEST["btn"]))
{
    $username=$_REQUEST["username"];
    echo $username;
    $password=$_REQUEST["password"];
    echo $password;
    $select=mysqli_query($connection,"select * from `student` where `username`='$username' AND `password`='$password'");
    if(mysqli_num_rows($select)==1)
{
    $row = mysqli_fetch_array($select);
    session_start();
    $_SESSION['stu_id']= $row['id'];
    header("Location:list.php");
}
    else
{
        echo "failed";
}
}
?>