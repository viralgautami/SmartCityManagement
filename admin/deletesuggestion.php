<?php
    include('../connection.php');
    $sql = "delete from contact where id='".$_GET['id']."'";
    $res = mysqli_query($con,$sql);
    if($res){
        header('location:suggestion.php');
    }
?>