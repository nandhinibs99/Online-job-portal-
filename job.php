<html>
    <head>
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    </head>
<body>
    <table border=1>
    <tr>
    <td>ID</td>
    <td>Company Name</td>
    <td>Jobs</td>
    </tr>
    <?php
$connection=mysqli_connect("localhost","root","","JobPortal");
$select=mysqli_query($connection,"select * from `company`");
    while($row=mysqli_fetch_array($select)){?>
         <tr>
             <td><?php echo $row['id']?></td>
             <td><?php echo $row['companyname']?></td>
             <td><a href="jobreq.php">JOBS</a></td>
         </tr>
        <?php }
         ?>
</table>
    <button name="btn" class="btn btn-primary" type="submit">logout</button>
</body>    
</html>
<?php
session_start();
if(!$_SESSION['test'])
{
 header("Location:login.php");
}
?>