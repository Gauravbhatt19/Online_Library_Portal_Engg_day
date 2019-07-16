<?php
require('includes/common.php');
if (isset($_SESSION['id'])) { header('location: books.php'); }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <title>Online Library Portal  | THDC-IHET</title>
    <link href="css/index.css" rel="stylesheet">
     </head>
    <body>
       <?php  include('includes/header.php');?>
        <div  id="banner_image">
           <div class="container">
              <div id="banner_content">
                <h1>Welcome<br /> to<br /> Online Library Portal</h1>
                <br />
                <br />
                 <a href="books.php" class ="btn btn-danger btn-lg active">Books</a>
              </div>
           </div>
        </div>
               <?php  include('includes/footer.php');?>
    </body> 
</html>