<?php
require('includes/common.php');
if(!isset($_SESSION['user_id']))
{
	header('location:login.php');
}
$con=mysqli_connect("localhost","root","","library_thdcihet");
$user_id=$_SESSION['user_id'];
$book_id=$_GET['id'];
 $qry="INSERT INTO users_books(user_id, book_id, status) VALUES('$user_id', '$book_id', 'Added to list')";
  $result=mysqli_query($con,$qry);
 $qry2="SELECT * FROM books WHERE id='$book_id'";
  $result1=mysqli_query($con,$qry2);
  $row=mysqli_fetch_assoc($result1);
$noc=$row['no_of_copies'];
$noc--;
  $qry3="UPDATE books SET no_of_copies='$noc' WHERE id='$book_id'";
 $result3=mysqli_query($con,$qry3);
 header('location:books.php');
?>