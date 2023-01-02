<?php
require_once('connection.php');

    $id=$_POST['id'];
    $task=$_POST['task'];
    $flag =update($id,$task);
    if($flag){
        echo "successfully updated";
    }
    else
      echo "not successfully updated";

header('location:admin_portal.php');
?>