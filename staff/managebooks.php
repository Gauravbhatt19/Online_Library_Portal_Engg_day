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
        <title>Manage Books | Library</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
       <?php  include('includes/header.php');?>
		<div class="container" id="cart_box">
            <h1>List of Books</h1>
            <table class="table table-striped">
                <tbody> 
                    <tr>
                        <th>Book Title</th>
                        <th>Book Id</th>
                        <th>Book Author</th>
                        <th>Book Description</th>
                        <th>No. of Copies</th>
                        <th>Almirah Code</th>
                    </tr>
                    <?php 
                    $con=mysqli_connect("localhost",'root','','library_thdcihet');
                   $qry="SELECT * FROM books";
                    $result=mysqli_query($con,$qry);
                    while($row=mysqli_fetch_assoc($result)) {
                        $bid=$row['id'];
                        $title=$row['title'];
                        $author=$row['author'];   
                        $descp=$row['description'];
                        $noc=$row['no_of_copies'];
                        $loc=$row['loc'];
                        echo "<tr>
                        <td>{$title}</td>
                        <td>{$bid}</td>
                        <td>{$author}</td>
                        <td>{$descp}</td>
                        <td>{$noc}</td>
                        <td>{$loc} <a href='delbook.php?id=".$bid."' class='remove_item_link'>Delete</a></td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div> 
        <div class="container" id="cart_box">
                        <div class="row">
                <div class="col-xs-10  col-sm-4   col-sm-offset-4 col-xs-offset-1">
                    <h1> ADD BOOK</h1>
                    <form action="addbook.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="title" placeholder="Book Title"  required >
                      </div>
                      <div class="form-group">
                        <input type="number"  class="form-control" name="id" placeholder="Book Id"  required>
                      </div>
                      <div class="form-group">
                        <input type="text"  class="form-control" name="author" placeholder="Author" required>
                      </div>
                      <div class="form-group">
                        <input type="textr"  class="form-control"  name="descp" placeholder="Description" required>
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="noc" placeholder="No. of Copies" required >
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="loc" placeholder="Almirah Code" required>
                      </div> 
                      <div class="form-group">
                        <label>Upload Cover Page</label>
                        <input type="file" class="form-control" name="thmbnl" accept="image/jpg" id="thmbnl" required>
                      </div>
                      <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>
        <br />
        <br />
        <br />
    </div> 
	<?php  include('includes/footer.php');?>
</body>
</html>