<?php
session_start();
require_once('connection.php');

$id=$_POST['id'];
$name=$_POST['name'];
$pass=$_POST['pass'];
$task=$_POST['task'];
$attendance=$_POST['attendance'];
$status=$_POST['status'];

if(isset($id) && isset($name) && isset($pass)) 
{
  if(isset($task) && isset($attendance)){
    $flag = create($id,$name,$pass,$task,$attendance,$status);

    if($flag)
        $_SESSION['msg'] = "<div style='padding:20px;background-color:green;color:white;'> <strong>added Successfully</strong> </div>";
    else
        $_SESSION['msg'] = "<div style='padding:20px;background-color:red;color:white;'> <strong>Alert! unable to connect</strong> </div>";
  }
    
}
header('Location:admin_portal.php');   

?>