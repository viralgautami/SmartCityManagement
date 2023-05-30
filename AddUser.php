<?php
session_start();

$con = mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$newpwd = md5($_POST['psw']);
$query = "INSERT INTO login (username,email,password) VALUES('$_POST[uname]','$_POST[email]','$newpwd')";


if ($res = mysqli_query($con, $query)) 
{

echo "New record created successfully";
   $_SESSION['uname']=$_POST['uname'];
   
   header("Location: index.php");
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

