<?php
session_start();
require_once('connection.php');
$id=$_GET['id'];
$s="select * from emp where id='$id'";
$result = $con->query($s);
if($result->num_rows>0)
{
    $quer= $result->fetch_assoc();
    
}else{
    echo "<h1>Error Occur</h1>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Page</title>
    <style>
        th{
            background-color: grey;
            font-size: large;
        }
    </style>
</head>
<body>
    <center>
    <h2>
        welcome <?php echo $quer['name']?>
    </h2>
    <table style="text-align:center;">
    <tr>
            <th>ID</th>
            <th>emp_name</th>
            <th>work</th>
            <th>Attendance</th>
        </tr>
        <tr>
            <td><?php  echo $quer['id'] ?></td>
            <td><?php  echo $quer['name'] ?></td>
            <td><?php  echo $quer['task'] ?></td>
           <td> <?php  echo $quer['attendance'] ?></td>
        </tr>
       
    </table>
    <br><br>
    <h2>Mark Your Attendance</h2>
    <br>
    <form action="update_attendance.php"method="POST">
    <input type="text"name="id" placeholder="id"><br>
    <input type="text" name="attendance"placeholder="mark your attendance"><br><br>
    <input type="submit">
    </form>
    <br><br>
    <h2><a href="Login.php">Logout</a></h2>
    </center>
    
</body>
</html>