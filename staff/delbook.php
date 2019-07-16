<?php
require('includes/common.php');
if (!isset($_SESSION['id'])) { header('location: index.php'); }
$con=mysqli_connect("localhost","root","","library_thdcihet");
$iid=$_GET['id'];
 $qry="DELETE FROM books WHERE(id='$iid')";
 $result=mysqli_query($con,$qry);
 header('location:managebooks.php');
?>