<?php
require('includes/common.php');
?>
<?php
$con=mysqli_connect("localhost","root","","library_thdcihet");
$id=mysqli_real_escape_string($con,$_POST['id']);
$qry="SELECT * FROM users WHERE login_id='$id'";
$result=mysqli_query($con,$qry);
$result=mysqli_fetch_assoc($result);
if(!isset($result['id']))
{
	 echo"<script type='text/javascript'>
  	window.setTimeout(function() { alert( 'Sorry No Record found, Try Again' );
    window.location = 'finduser.php';},0);
  </script>";
}	?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Issued | Library</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
       <?php  include('includes/header.php');?>
         <div class="container" id="cart_box">
         	<h1>Booked list of Books</h1>
            <table class="table table-striped">
                <tbody> 
                    <tr>
                        <th>Book Number</th>
                        <th>Book Title</th>
                        <th>Book Id</th>
                        <th></th>
                    </tr>
                    <?php 
                    $user_id=$result['id'];
                    $qry="SELECT * FROM users_books WHERE user_id ='$user_id' AND status='Added to list'";
                    $result=mysqli_query($con,$qry);
                    if(mysqli_num_rows($result)==0)
                    { echo'<tr>
                        <td>No books to issue !</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>';
                }
                else
                {
                    $count=0;
                    $str='';
                    while($row=mysqli_fetch_assoc($result)) {
                        $book_id=$row['book_id'];
                        $qry1="SELECT * FROM books WHERE id ='$book_id' ";
                        $col=mysqli_query($con,$qry1);
                        $col1=mysqli_fetch_assoc($col);
                        $iname=$col1['title'];
                        $iprice=$col1['id'];
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
                        <td>".'<a href="success.php?'."id={$str}".'" class="btn btn-primary">Issue Book</a></td>
                    </tr>';
                }
                    ?>
                </tbody>
            </table>
        </div> <div class="container" id="cart_box">
         	<h1>Issued list of Books</h1>
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
	                    $qry1="SELECT * FROM books WHERE id ='$book_id' ";
                        $col=mysqli_query($con,$qry1);
                        $col1=mysqli_fetch_assoc($col);
                        $iname=$col1['title'];
                        $id=$col1['id'];
                        $count=$count+1;
                        echo "<tr>
                        <td>{$count}</td>
                         <td>{$iname}<a href='icart_remove.php?id={$book_id}' class='remove_item_link'> Return</a></td>
                        <td>{$id}</td>
                        <td>{$book_idate}</td>
                        <td>{$date->format('Y-m-d H:i:s')}</td>
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
