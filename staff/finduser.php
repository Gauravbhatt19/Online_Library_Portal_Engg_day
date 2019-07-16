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
        <title>Find User | Library</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
       <?php  include('includes/header.php');?>
		<div class="container" id="login_form">
            <div class="row row_style">
                <div class="col-xs-10  col-sm-6   col-sm-offset-3 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Find User </h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Enter User ID to search </p>
                            <form method="POST" action="search_submit.php">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="User ID" >
                                </div>
                                <button class="btn btn-primary">Search</button>
                            </form>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>

	<?php  include('includes/footer.php');?>
</body>
</html>