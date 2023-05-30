<?php
    session_start();
    if($_POST['user']=="admin" && $_POST['pass'] == "admin"){
		$_SESSION['auser']=$_POST['user'];
		header("location:dashboard.php");
    }
    else{
        header("index.php");
    }
?>