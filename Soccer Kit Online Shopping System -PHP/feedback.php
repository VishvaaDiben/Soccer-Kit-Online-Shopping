<?php
session_start();
?>
<!DOCTYPE html>
<!-- 

 -->

<head>
<title>Feedback</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<meta name="Generator" content="EditPlus"> 
<meta name="Author" content=""> 
<meta name="Keywords" content=""> 
<meta name="Description" content="">

	<!--styles -->
	<link href="admin/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	#content h2 {
	color: green;
}
    .header {
	color: white;
}
    .header {
	color: white;
}
    </style>
</head>

<body>
<div id="menu">
			<ul>
                <?php

				if(isset($_SESSION['user']))
				{
					echo ("<li ><a href=\"welcome.php\" >My Page</a></li>");
				}else
				{
					echo ("<li ><a href=\"index.php\" accesskey='1' >Home</a></li>");
				}

				?>
						
				<li><a href="types.php" accesskey="2" title="">Equipment</a></li>

				<?php
				
				if(isset($_SESSION['user']))
				{
					echo ("<li><a href=\"logout.php\" >Logout</a></li>");
				}else
				{
					echo ("<li><a href=\"login.php\" >Login</a></li>");
				}


				?>
				
				<li class="current_page_item"><a href="feedback.php" >Feedback</a></li>
				
			</ul>
		</div>
        
        
<h1><a href="index.php" class="header">Reddy`s Football Equipment</a></h1>
<h4 class="header"><u>Passion For The Game</u></h4>
<br><br><br><br><br><br><br><br><br><br><br><br>



<div id="wrapper">
	<div id="page-wrapper">
		<div id="page">
			<div id="content">
		<h2>We Are Waiting For Your Review !</h2>
				<hr>
			</div>

			<div class="container">
<form action="feedbackO.php" method="post">
	<div class="row">
		<div class="col-lg-2">Email</div>
		<div class="col-lg-3"><input type="email" name="email" class="form-control" placeholder="Enter Email here" required></div>


	</div>
	<br>
	<div class="row">
		<div class="col-lg-2">Message</div>
		<div class="col-lg-3"><textarea type="text" name="message" class="form-control" placeholder="Enter your message here" required></textarea></div>


	</div>
	<br>
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-3"><input type="submit" class="btn btn-danger" value="Send Now"></div>


	</div>
</form>
			</div>



</body>
</html>
