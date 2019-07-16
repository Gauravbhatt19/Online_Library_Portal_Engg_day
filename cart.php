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
        <title>BOOK | Library</title>
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
                        <th></th>
                    </tr>
                    <?php 
                    $con=mysqli_connect("localhost","root","","library_thdcihet"); 
                    $user_id=$_SESSION['user_id'];
                    $qry="SELECT * FROM users_books WHERE user_id ='$user_id' AND status='Added to list'";
                    $result=mysqli_query($con,$qry);
                    if(mysqli_num_rows($result)==0)
                    { echo'<tr>
                        <td>Add books to the list first !</td>
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
                        $qry1="SELECT * FROM books WHERE id ='$book_id' ";
                        $col=mysqli_query($con,$qry1);
                        $col1=mysqli_fetch_assoc($col);
                        $iname=$col1['title'];
                        $iprice=$col1['id'];
                        $sum=$sum+$iprice;
                        $count=$count+1;
                        $str=$row['id'].','.$str;
                        echo "<tr>
                        <td>{$count}</td>
                        <td>{$iname}<a href='cart_remove.php?id={$book_id}' class='remove_item_link'> Remove</a></td>
                        <td>{$iprice}</td>
                        <td></td>
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