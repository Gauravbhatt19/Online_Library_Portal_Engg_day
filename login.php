<?php
require('includes/common.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Login | Library</title>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
        <?php  include('includes/header.php');?>
        <div class="container" id="login_form">
            <div class="row row_style">
                <div class="col-xs-10  col-sm-6   col-sm-offset-3 col-xs-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Login </h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to issue a book</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="text" name="id" class="form-control" placeholder="Id" >
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                </div>
                                <button class="btn btn-primary">Login</button>
                            </form>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
        <?php  include('includes/footer.php');?>
    </body> 
</html>