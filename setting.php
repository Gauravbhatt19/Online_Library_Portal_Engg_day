<?php
require('includes/common.php');
if (!isset($_SESSION['id'])) { header('location: index.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <title>Settings | Library</title>
        <link href="../css/index.css" rel="stylesheet">
    </head>
    <body>
   <?php  include('includes/header.php');?>
        <div class="container" id="sett_form">
            <div class="col-xs-10  col-sm-6   col-sm-offset-3 col-xs-offset-1">
                <h1> Change Password</h1>
                <form action="setting_script.php" method="POST">
                    <div class="form-group">
                      <input type="password"  class="form-control" placeholder="Old Password" name="pass" required>
                    </div>
                    <div class="form-group">
                      <input type="password"  class="form-control" placeholder="New Password" name="newpass"required>
                    </div>
                    <div class="form-group">
                      <input type="password"  class="form-control" placeholder="Re-type New Password" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
            </div>
        </div>
               <?php  include('includes/footer.php');?>
    </body> 
</html>