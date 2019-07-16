<?php
require('includes/common.php');
if (!isset($_SESSION['id'])) { header('location: index.php'); }
$con=mysqli_connect("localhost","root","","library_thdcihet");
$user_id=$_SESSION['user_id'];
$iid=$_GET['id'];
 $qry="DELETE FROM users_books WHERE(book_id='$iid')";
 $result=mysqli_query($con,$qry);
 $qry2="SELECT * FROM books WHERE id='$iid'";
  $result1=mysqli_query($con,$qry2);
  $row=mysqli_fetch_assoc($result1);
$noc=$row['no_of_copies'];
$noc++;
  $qry3="UPDATE books SET no_of_copies='$noc' WHERE id='$iid'";
 $result3=mysqli_query($con,$qry3);
 header('location:cart.php');
?>