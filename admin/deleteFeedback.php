<?php
    include('../connection.php');
    $sql = "delete from feedback where id='".$_GET['id']."'";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:feedback.php');
    }
?>