<?php
require('includes/common.php');
if (!isset($_SESSION['id'])) { header('location: index.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Success | Library</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
      <?php include('includes/header.php');?>
        <?php
if(!isset($_SESSION['id']))
{
header('location:find.php');
}
$ps=$_GET['id'];
 $token = strtok($ps, ",");
 $i=0;
while ($token !== false)
   {   $iden[$i]=$token;
   $token = strtok(",");
   $i++;
   }
$con=mysqli_connect("localhost","root","","library_thdcihet");
foreach($iden as $id) {  
  $qry1="SELECT * FROM users_books WHERE id='{$id}'";
  $result=mysqli_query($con,$qry1);
  $result=mysqli_fetch_assoc($result);
  $bid=$result['book_id'];
  $user_id=$result['user_id'];
$qry2="INSERT INTO users_ibooks(id,user_id,book_id,status) VALUES ('{$id}','{$user_id}','{$bid}','Confirmed')";
$result=mysqli_query($con,$qry2);
  $qry1="SELECT * FROM users_ibooks WHERE id='$id'";
  $result=mysqli_query($con,$qry1);
  $result=mysqli_fetch_assoc($result);
}
      echo'<div class="container" id="success_msg">
            <div class="row">
                <div class="col-xs-10  col-sm-8   col-sm-offset-2 col-xs-offset-1">
                    <h1> The books has issued. <a href="finduser.php">Click here</a> to issue more. </h1>
                </div>
            </div>
         </div>';
?>
        <?php  include('includes/footer.php');?>
    </body> 
</html>