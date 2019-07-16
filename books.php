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
        <title>Library | THDC-IHET</title>
        <link href="css/index.css" rel="stylesheet">
    </head>
    <body>
     <?php  include('includes/header.php'); include('includes/check-if-added.php');?>
        <div class="container" id="product_box">
            <div class="container jumbotron">
                <h1>Welcome to Online Library Portal !</h1>
                <p >Here ,you can request to issue any book available.</p>
            </div>
            <div class="row text-center" id="product_box1" >
                <div class="row">
                    <?php 
        $conn=mysqli_connect("localhost",'root','','library_thdcihet');
        $qry="SELECT * FROM books";
        $result=mysqli_query($conn,$qry);
        while($row=mysqli_fetch_assoc($result))
        {   $link="/thumbnails/".$row['id'].".jpg";
            $bid=$row['id'];
            $bttl=$row['title'];
            $bdescp=$row['description'];
            $bauthor=$row['author'];
            $bnocp=$row['no_of_copies'];
            $bloc=$row['loc'];
                    echo '<div class="col-md-3 col-sm-6">
                        <span class="thumbnail"> 
                            <img src='.$link.' alt="Responsive image"> 
                            <h3>'.$bttl.'</h3>
                            <p>Book Id:'.$bid.'</p>
                            <p>Author:'.$bauthor.'</p>
                            <p>Description:'.$bdescp.'</p>
                            <p>No. of Copies:'.$bnocp.'</p>
                            <p>Almirah Code:'.$bloc.'</p>';
                            if($bnocp){
                            if (!isset($_SESSION['user_id'])) { 
                                    echo'<p><a href="login.php" role="button" class="btn btn-primary btn-block">Book Now</a></p>'; 
                                } 
                                else { 
                                    if (check_if_added_to_cart($bid)) {
                                    } 
                                    else {  
                                        echo'<p><a href="cart-add.php?id='.$bid.'" name="add" value="add" class="btn btn-block btn-primary">Add to List</a></p>';  
                                        } 
                                    }}

                           echo'                      </span>    
                    </div>';}
                    ?>
                  
                       
                </div>
            </div>
        </div>     
        <?php  include('includes/footer.php');?>
    </body> 
</html>