<?php
 session_start();
$con=mysqli_connect("localhost","root","","project");
// Check connection
$pwd = $_POST['psw'];
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM login WHERE username ='$_POST[uname]'";


$result=mysqli_query($con,$sql)or die(mysqli_connect_error($con));


$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$dbpwd = $row['password'];

if(md5($pwd)==$dbpwd)
{
  echo "Password match";  
 
   $_SESSION['sid']=$row['id'];
   $_SESSION['uname']=$row['username'];
   header("Location: index2.php");
}
else
{

  $msg="Invalid loginid or password!!";


  echo "<script type='text/javascript'> alert('$msg');</script>";
   header("Location: index.php");

  
}

?>