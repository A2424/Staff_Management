<?php
require_once('connection.php');

    $args=array('id'=>$_POST['id']);
    $id=$_POST['id'];
    $attendance=$_POST['attendance'];
    $s=updateatten($id,$attendance);
    if($s){
        echo "successfully updated";
        header('location:user_portal1.php?'.http_build_query($args));
    }
    else
      echo "not successfully updated";
    



?>