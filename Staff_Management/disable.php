<?php
require_once('connection.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $s="update emp set status=0 where id='$id'";
    mysqli_query($con,$s);

}
header('location:admin_portal.php');
?>