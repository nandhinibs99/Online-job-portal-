<html>
    <head>
<title>List</title>
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet"/>
    </head>

<body>
        <div class="jumbotron text-center">
    <table border="1">
    <tr>
        <th>company_name</th>
        <th>job</th>
        <th>qualification</th>
        <th>percentage</th>
        <th>location</th>
        <th>salary</th>
        <th>skills</th>
        <th>action</th>
    </tr>
<?php
$connection=mysqli_connect("localhost","root","","onlinejob");
session_start();
 $select=mysqli_query($connection,"select * from `addjob`");
    while($row=mysqli_fetch_array($select)){
        $company_id = $row['company_id'];
       // echo $company_id."<br>";
            $select_company = mysqli_query($connection,"SELECT * FROM `company` WHERE `id` = '$company_id' ");
            $row_company = mysqli_fetch_array($select_company);
       // echo $row_company['companyname']."<br>";
        ?>
         <tr>
             <td><?php echo $row_company['companyname']?></td>
             <td><?php echo $row['job']?></td>
             <td><?php echo $row['qualification']?></td>
             <td><?php echo $row['percentage']?></td>
             <td><?php echo $row['location']?></td>
             <td><?php echo $row['salary']?></td>
             <td><?php echo $row['skills']?></td>
             <td><a href="apply.php?jobId=<?php echo $row['id'];?>" class="btn btn-primary">Apply</a></td>
        </tr>
<?php }
    ?>  
    </table><br>
    <a href="myjobs.php">My Jobs</a><br><br>

    <a class="btn btn-dark" href="logout.php">Logout</a>

    </div>
    </body>
</html>