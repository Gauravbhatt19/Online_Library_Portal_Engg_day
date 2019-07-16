<?php
$conn=mysqli_connect('localhost','root','','library_thdcihet');
$id='@$staff';
$pass='staff@123';
$pass=md5($pass);
$qry="INSERT INTO staff (id,password) VALUES ('{$id}','{$pass}')";
$result=mysqli_query($conn,$qry);
if($result)
{
	echo "<script>alert('Success...!');</script>";
}

?>