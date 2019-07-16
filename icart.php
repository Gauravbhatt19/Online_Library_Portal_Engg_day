<?php
require('includes/common.php');
if(!isset($_SESSION['id']))
{
header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Issued | Library </title>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
       <?php  include('includes/header.php');?>
        <div class="container" id="cart_box">
            <table class="table table-striped">
                <tbody> 
                    <tr>
                        <th>Book Number</th>
                        <th>Book Title</th>
                        <th>Book Id</th>
                        <th>Issued Date</th>
                        <th>Return Date</th>
                    </tr>
                    <?php 
                    $con=mysqli_connect("localhost","root","","library_thdcihet"); 
                    $user_id=$_SESSION['user_id'];
                    $qry="SELECT * FROM users_ibooks WHERE user_id ='$user_id' AND status='Confirmed'";
                    $result=mysqli_query($con,$qry);
                    if(mysqli_num_rows($result)==0)
                    { echo'<tr>
                        <td>No book issued !</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
                }
                else
                {
                    $sum=0;
                    $count=0;
                    $str='';
                    while($row=mysqli_fetch_assoc($result)) {
                        $book_id=$row['book_id'];
                        $book_idate=$row['book_idate'];
                        $date = new DateTime($book_idate);
                        $date->add(new DateInterval('P0Y0M15D'));
                        $book_ldate=$date->format('Y-m-d H:i:s');
                        $qry1="SELECT * FROM books WHERE id ='$book_id' ";
                        $col=mysqli_query($con,$qry1);
                        $col1=mysqli_fetch_assoc($col);
                        $iname=$col1['title'];
                        $id=$col1['id'];
                        $count=$count+1;
                        echo "<tr>
                        <td>{$count}</td>
                        <td>{$iname}</td>
                        <td>{$id}</td>
                        <td>{$book_idate}</td>
                        <td>{$book_ldate}</td>
                    </tr>";

                    }
                    echo "<tr>
                        <td></td>
                        <td>Total {$count}</td> 
                        <td>".'</td>
                    </tr>';
                }
                    ?>
                </tbody>
            </table>
        </div>
               <?php  include('includes/footer.php');?>
    </body> 
</html>