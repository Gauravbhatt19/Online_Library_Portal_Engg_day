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
					<a href = "finduser.php"><span class = "glyphicon glyphicon-search"></span> Find User </a>
				</li> 
				<li>
					<a href = "managebooks.php"><span class = "glyphicon glyphicon-edit"></span> Manage Books </a>
				</li> 
				<li>
					<a href = "signup.php"><span class = "glyphicon glyphicon-plus"></span> Add User </a>
				</li> 
				<li>
					<a href = "setting.php"><span class = "glyphicon glyphicon-cog"></span> Settings</a>
				</li> 
				<li>
					<a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a>
				</li> '; }
				?> 
			</ul> 
		</div> 
	</div> 
</div>