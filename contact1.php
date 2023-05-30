<?php
$con = mysqli_connect("localhost","root","","project");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "INSERT INTO contact (name,email,sub,review) VALUES('$_POST[name1]','$_POST[email1]','$_POST[sub1]','$_POST[rw1]')";


if ($res = mysqli_query($con, $query)) 
{

echo "New record created successfully";
header("Location: index.php");
  
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
?>

