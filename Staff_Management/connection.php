<?php
require_once('dbConfig.php');
$con=new mysqli(SERVERNAME,USERNAME,PASSWORD,DBNAME);
if($con->connect_error){
    die("connection lost");
}
function create($id,$name,$pass,$task,$attendance,$status)
{
    global $con;
    $q = "insert into emp(id,name,pass,task,attendance,status) values('{$id}','{$name}','{$pass}','{$task}','{$attendance}','{$status}')";
    $result = $con->query($q);
    if($result)
        return true;
    else
        return false;
}
function update($id,$task)
{
    global $con;
    $q = "update emp set task ='{$task}' where id =  {$id}";
    $result = $con->query($q);
    if($result)
        return true;
    else 
        return false;
}
function updateatten($id,$attendance)
{
    global $con;
    $q = "update emp set attendance ='{$attendance}' where id =  {$id}";
    $result = $con->query($q);
    if($result)
        return true;
    else 
        return false;
}


?>