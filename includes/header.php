<div class="navbar navbar-inverse navbar-fixed-top"> 
	<div class="container"> 
		<div class="navbar-header"> 
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
				<span class="icon-bar"></span> 
			</button> 
			<a class="navbar-brand" href="index.php">Online Library Portal</a> 
		</div> 
		<div class="collapse navbar-collapse" id="myNavbar"> 
			<ul class="nav navbar-nav navbar-right"> 
				<?php if (isset($_SESSION['id'])) {
				echo'  
				<li>
					<a href = "icart.php"><span class = "glyphicon glyphicon-list-alt"></span> Issued List </a>
				</li> 
				<li>
					<a href = "cart.php"><span class = "glyphicon glyphicon-list-alt"></span> Booked List </a>
				</li> 
				<li>
					<a href = "setting.php"><span class = "glyphicon glyphicon-user"></span> Settings</a>
				</li> 
				<li>
					<a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a>
				</li> '; }
				else 
					{
					echo ' 
				<li>
					<a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>';
				} ?> 
			</ul> 
		</div> 
	</div> 
</div>