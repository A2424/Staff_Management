
<?php
require_once('connection.php');
$s="select * from emp ";
$quer=mysqli_query($con,$s);
$All_data=mysqli_fetch_all($quer,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <style>
        th{
            background-color: grey;
            font-size: large;
        }
    </style>
</head>
<body><center>
    <h1>Admin Portal</h1>
    <table style="text-align:center ;">
        <tr>
            <th>ID</th>
            <th>emp_name</th>
            <th>password</th>
            <th>work</th>
            <th>Attendance</th>
            <th>status</th>
           
        </tr>
        <?php
         foreach($All_data as $data){
        ?>
        <tr>
        <td><?php echo $data['id']?></td>
        <td><?php echo $data['name']?></td>
        <td><?php echo $data['pass']?></td>
        <td><?php echo $data['task']?></td>
        <td><?php echo $data['attendance']?></td>
        <td><?php 
        
        if($data['status']==1){
            echo "<a href=disable.php?id=".$data['id']." >(status active) Disable</a>";
        }else{
            echo "<a href=enable.php?id=".$data['id']." > (status Inactive)enable</a>";
        }
       
        ?></td>
        </tr>
      <?php }
 ?>       
    </table>
    <br>
    <h2>Update Employee's Tasks</h2>
    <br>
    <form action="update_work.php"method="POST">
    <input type="text"name="id" placeholder="id"><br>
    <input type="text" name="task"placeholder="task assign"><br><br>
    <input type="submit">
    </form>

    <br>
    <br>
    <h2>Add New Employee</h2>
    <br>
    <form action="insertData.php"method="POST">
    <input type="text"name="id" placeholder="id"><br>
    <input type="text" name="name"placeholder="name"><br>
    <input type="text"name="pass" placeholder="password"><br>
    <input type="text" name="task"placeholder="work"><br>
    <input type="text"name="attendance" placeholder="attendance"><br>
    <input type="text" name="status"placeholder="status"><br><br>
    <input type="submit">
    </form>
    <br><br>
    <h2 ><a href="admin.php">Logout</a></h2>
    </center>
    
</body>
</html>