<?php
error_reporting(0);
include ('connection.php');
$target = "images/".basename($_FILES["img"]["name"]);
$imageFileType = strtolower(pathinfo($target, PATHINFO_EXTENSION));
$check = getimagesize($_FILES['img']['tmp_name']);
$dstfileName = "images/".$_FILES['img']['name'];
$tmp = $_FILES['img']['tmp_name'];
$flag = 1;
if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
&& $imageFileType != 'gif'&& $imageFileType != 'jpeg') {
    $flag = 0;
    header("Location:feedback.php?err=1");
}
if ($check == false) {
    header("Location:feedback.php?err=2");
    $flag = 0;
}
if (file_exists($target)) {
    
    $target = "images/1".basename($_FILES["img"]["name"]);
    echo $target;
}
if ($_FILES['img']['size'] > 500000) {
    echo 'Sorry, your file is too large.';
    header("Location:feedback.php?err=3");
}
$dname=$_POST['sd'];
if ($flag == 1) {
    $sql = "insert into feedback(name,location,department,msg,img)values('".$_POST['name']."','".$_POST['location']."','$dname','".$_POST['msg']."','$target')";
    $res = mysqli_query($con,$sql);
    if (move_uploaded_file($tmp, $target)) {
        header('Location:feedback.php?err=0');
     }
    
}

?>