<?php
session_start();
include('connection.php');
$args=array('id'=>$_POST['id']);
if(!empty($_SESSION['id'])){
        header("location:user_portal1.php");
}


$id=$_POST['id'];
$pass=$_POST['password'];

$s="select * from emp where id='$id' and pass='$pass'";
$r=mysqli_query($con,$s);
$c=mysqli_num_rows($r);
if($c>0){
    $r=mysqli_fetch_object($r);
    if($r->status==1){
        header("location:user_portal1.php?".http_build_query($args));
    }else{
        echo"you have not permission to login";
        header('location:Login.php');
    }
}
else{
   echo"Invalid id & password";
   header('location:Login.php');
}



?>