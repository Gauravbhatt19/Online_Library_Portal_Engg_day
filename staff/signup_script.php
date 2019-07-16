<?php
require('includes/common.php');
?>
<?php
$con=mysqli_connect("localhost","root","","library_thdcihet");
$name=mysqli_real_escape_string($con, $_POST['fullname']);
$id=mysqli_real_escape_string($con, $_POST['id']);
$pass=mysqli_real_escape_string($con, $_POST['password']);
$pass=md5($pass);
$mbno=mysqli_real_escape_string($con, $_POST['contact']);
$branch=mysqli_real_escape_string($con, $_POST['branch']);
$rno=mysqli_real_escape_string($con, $_POST['rno']);
if(empty($name))
{
    echo "<script> alert('please Enter Name..!');
    </script>";
    header('location:signup.php');
}
else if(empty($id))
{
 echo "<script> alert('please Enter Login Id..!');
    </script>";
    header('location:signup.php');
}
else if(empty($pass))
{
 echo "<script> alert('please Enter password..!');
    </script>";
    header('location:signup.php');
}
else if(empty($mbno))
{
 echo "<script> alert('please Enter Mobile no...!');
    </script>";
    header('location:signup.php');
}
else if(empty($branch))
{
 echo "<script> alert('please Enter branch.!');
    </script>";
    header('location:signup.php');
}
else if(empty($rno))
{
 echo "<script> alert('please Enter Roll No..!');
    </script>";
    header('location:signup.php');
}
else
{
  $qry="SELECT login_id FROM users WHERE (login_id='$id')";
  $result=mysqli_query($con,$qry);
  if(mysqli_num_rows($result) > 0)
  {
               echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Login Id already Exists.!' );
    window.location = 'signup.php';},0);
  </script>";
  }
  else
  {
    $qry="INSERT INTO users(name,login_id,password,contact,branch,rno)  VALUES ('$name','$id','$pass','$mbno','$branch','$rno')";
    $result=mysqli_query($con,$qry);
    $_SESSION['id']=$id;
    echo"<script type='text/javascript'>
  window.setTimeout(function() { alert( 'Successfully Registered..!' );
    window.location = 'signup.php';},0);
  </script>";
  }
}
?>