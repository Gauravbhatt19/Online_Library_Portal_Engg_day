<?php
require('includes/common.php');
?>
<?php
$con=mysqli_connect("localhost","root","","library_thdcihet");
$id=mysqli_real_escape_string($con,$_POST['id']);
$pass=mysqli_real_escape_string($con,$_POST['password']);
$pass=md5($pass);
if(strpos($id,'$')==1)
{$qry="SELECT id FROM staff WHERE (id='$id'  AND password='$pass')";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result) == 0)
{
     echo"<script type='text/javascript'>
  	window.setTimeout(function() { alert( 'Sorry Invalid login attempt staff , Try Again' );
    window.location = 'login.php';},0);
  </script>";
}
else
{
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $_SESSION['id']=$row['id'];
      header('location:/staff/');
}
}
else{
$qry="SELECT id,login_id FROM users WHERE (login_id='$id'  AND password='$pass')";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result) == 0)
{
     echo"<script type='text/javascript'>
  	window.setTimeout(function() { alert( 'Sorry Invalid email Or Password , Try Again' );
    window.location = 'login.php';},0);
  </script>";
}
else
{
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $_SESSION['id']=$row['login_id'];
     $_SESSION['user_id']=$row['id'];
      header('location:books.php');
}}
?>
