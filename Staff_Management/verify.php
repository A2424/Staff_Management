<?php
require_once('connection.php');

    $id=$_POST['id'];
    $pass=$_POST['password'];

    $q="select * from admin where id='$id' and pass='$pass'";
    $res=mysqli_query($con,$q);
    $check=mysqli_fetch_array($res);
    if(isset($check)){
        header("location:admin_portal.php");
    }else{
        header("location:admin.php");
    }


?>