<?php

include '../connection.php';
session_start();
$sql = "DELETE FROM login WHERE id = '".$_GET['id']."'";
$res = mysqli_query($con, $sql);
if($res){
    header('Location: manage-users.php');
}
else{
    die('fail to delete');
}
?>