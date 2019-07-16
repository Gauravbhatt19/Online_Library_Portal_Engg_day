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
        <title>Register | Users</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
        <?php  include('includes/header.php');?>
       <div class="container" id="sign_form">
            <div class="row">
                <div class="col-xs-10  col-sm-4   col-sm-offset-4 col-xs-offset-1">
                    <h1> ADD USER </h1>
                    <form action="signup_script.php" method="POST">
                      <div class="form-group">
                        <input type="text" class="form-control"  name="fullname" placeholder="Name"  required >
                      </div>
                      <div class="form-group">
                        <input type="text"  class="form-control" name="id" placeholder="Login Id"  required>
                      </div>
                      <div class="form-group">
                        <input type="password"  class="form-control" name="password" placeholder="Password" required>
                      </div>
                      <div class="form-group">
                        <input type="number"  class="form-control"  name="contact" placeholder="Contact" required>
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" name="branch" placeholder="Branch" required >
                      </div>
                      <div class="form-group">
                        <input type="number" class="form-control" name="rno" placeholder="Roll No." required>
                      </div>
                      <button type="submit" class="btn btn-primary">ADD</button>
                    </form>
                </div>
            </div>
        </div>
               <?php  include('includes/footer.php');?>
    </body> 
</html>