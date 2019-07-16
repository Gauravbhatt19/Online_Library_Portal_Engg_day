<?php
function check_if_added_to_cart($book_id)
{
	$con=mysqli_connect("localhost","root","","library_thdcihet"); 
	$user_id=$_SESSION['user_id'];
	$qry="SELECT * FROM users_books WHERE book_id='$book_id' AND user_id ='$user_id' and status='Added to list'";
	$result=mysqli_query($con,$qry);
if(mysqli_num_rows($result)>=1)
{
    return 1;
}
else
{
   return 0;
}
}
?>
