<?php
require('includes/common.php');
if (!isset($_SESSION['id'])) { header('location: index.php'); }
?>
<?php
$con=mysqli_connect("localhost","root","","library_thdcihet");
$pass=mysqli_real_escape_string($con, $_POST['pass']);
$newpass=mysqli_real_escape_string($con, $_POST['newpass']);
$pass=md5($pass);
$newpass=md5($newpass);
$id=$_SESSION['id'];
  $qry="SELECT * FROM staff WHERE (id='$id'  AND password='$pass')";
$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result) == 0)
{
       echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Sorry Invalid Password , Try Again !' );
    window.location = 'setting.php';},0);
  </script>";
  
}
else
{   $qry="UPDATE staff SET password='{$newpass}' WHERE (id='$id')";  
    $result=mysqli_query($con,$qry);    
 
    echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Password Updated Successfully..!' );
    window.location = 'setting.php';},0);
  </script>";
  
}