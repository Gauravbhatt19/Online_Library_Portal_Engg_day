<?php
session_start();
if (!isset($_SESSION['id'])) { header('location:../'); }
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Staff | Online Library Portal </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<link rel="stylesheet" href="../css/index.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
	<?php  include('includes/header.php');?>
			
			<div  id="banner_image">
           <div class="container">
              <div id="banner_content">
                <h1>Welcome, Staff<br /> to<br /> Online Library Portal</h1>      
              </div>
           </div>
        </div>
	<?php  include('includes/footer.php');?>
</body>
</html>