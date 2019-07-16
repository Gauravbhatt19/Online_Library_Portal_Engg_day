<?php
require('includes/common.php');
if (!isset($_SESSION['email'])) { header('location: index.php'); }
?>
<?php
$con=mysqli_connect("localhost","root","","store");
$pass=mysqli_real_escape_string($con, $_POST['pass']);
$newpass=mysqli_real_escape_string($con, $_POST['newpass']);
$pass=md5($pass);
$newpass=md5($newpass);
$email=$_SESSION['email'];
  $qry="SELECT * FROM users WHERE (email='$email'  AND password='$pass')";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result) == 0)
{
       echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Sorry Invalid Password , Try Again !' );
    window.location = 'setting.php';},0);
  </script>";
  
}
else
{   $qry="UPDATE users SET password='{$newpass}' WHERE (email='$email')";  
    $result=mysqli_query($con,$qry);      
    echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Password Updated Successfully..!' );
    window.location = 'setting.php';},0);
  </script>";
  
}