<?php
session_start();
include 'DB_CONFIG/connect_db.php';
?>
<!DOCTYPE html>
<html>		
<head>
<title>USER LOGIN</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/reset.css">
 <!--styles -->
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <link rel="stylesheet" href="css/style.css">
 <!--styles -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    #header-wrapper #header #logo p {
	color: white;
}
    #header-wrapper #header #logo h2 {
	color: white;
}
    </style>
</head>

<body> 
<div id="header-wrapper">
	<div id="header">
	    <div id="logo">
	    <h2>Reddy`s Football Equipment</h2>
			<p>Passion For The Game</p>
		</div>
		<div id="menu">
			<ul>
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
				
				<li class="current_page_item"><a href="types.php" accesskey="2" title="">Equipment</a></li>

					<?php
					
					if(isset($_SESSION['user']))
					{
						echo ("<li><a href=\"logout.php\" >Logout</a></li>");
					}else
					{
						echo ("<li><a href=\"login.php\" >Login</a></li>");
					}


					?>
				
				<li ><a href="feedback.php" >Feedback</a></li>
				
			</ul>
			
				
				
				
			</ul>
		</div>
	</div>

</div>


<div class="container">
<form method="" action="">


               
				<div class="row">
				<br>

					<legend>Jersey</legend>
<?php

$sql1 ="SELECT * FROM items WHERE category = 'Jersey'";
$query1 = mysqli_query($db,$sql1) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query1) > 0) 
						{                                         
    
   						while($row1 = mysqli_fetch_array($query1)) 
						{
							?>
										
					<div class="col-lg-3">
						<p style="font-size:20px; color:Blue;"><?php echo $row1['name']; ?></p>
						<p><img src="images/<?php echo $row1['image']; ?>" width="250" height="250" alt=""/></p>
						<p style="font-size:20px; fonnt-style:Bold; color:Red;">RM <?php echo $row1['price']; ?></p>
						<a href="typesD.php?name=<?php echo $row1['name']; ?>&price=<?php echo $row1['price']; ?>&category=<?php echo $row1['category']; ?>"><input type="button" class="btn btn-danger" value="Order Now"/></a>

					</div>
                    
                  
					<?php
                    }
					}
						?>
                      
                    
                  </div>   
			
					
			 <br><br>
             
             
				<div class="row">
                
					<legend>Shoe</legend>
<?php

$sql2 ="SELECT * FROM items WHERE category = 'Shoe'";
$query2 = mysqli_query($db,$sql2) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query2) > 0) 
						{                                         
    
   						while($row2 = mysqli_fetch_array($query2)) 
						{
							?>
					
					<div class="col-lg-3">
					  <p style="font-size:20px; color:Blue;"><?php echo $row2['name']; ?></p>
					  <p><img src="images/<?php echo $row2['image']; ?>" width="250" height="250" alt=""/></p>
						
						<p style="font-size:20px; color:Red;">RM <?php echo $row2['price']; ?></p>
					  <a href="typesD1.php?name=<?php echo $row2['name']; ?>&price=<?php echo $row2['price']; ?>&category=<?php echo $row2['category']; ?>"><input type="button" class="btn btn-danger" value="Order Now" /></a>
					</div>
                    
                    <?php
                    }
					}
						?>
                        

</div>				  

				<br><br>
                
                
                <div class="row">
				<br>

					<legend>Equipment</legend>
<?php

$sql3 ="SELECT * FROM items WHERE category = 'Equipment'";
$query3 = mysqli_query($db,$sql3) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query3) > 0) 
						{                                         
    
   						while($row3 = mysqli_fetch_array($query3)) 
						{
							?>
										
					<div class="col-lg-3">
						<p style="font-size:20px; color:Blue;"><?php echo $row3['name']; ?></p>
						<p><img src="images/<?php echo $row3['image']; ?>" width="250" height="250" alt=""/></p>
						<p style="font-size:20px; fonnt-style:Bold; color:Red;">RM <?php echo $row3['price']; ?></p>
						<a href="typesD1.php?name=<?php echo $row3['name']; ?>&price=<?php echo $row3['price']; ?>&category=<?php echo $row3['category']; ?>"><input type="button" class="btn btn-danger" value="Order Now"/></a>

					</div>
                    
                  
					<?php
                    }
					}
						?>
                      
                    
                  </div>   
			
					
			 <br><br>
             
				<marquee>
				<img src="images/goalkeeper-gloves-1.jpg" width="300" height="300" alt=""/><img src="images/BigRedMadrid2_1024x1024.jpg" width="300" height="300" alt=""/><img src="images/LumiParty-Bingirl-5m-9pcs-Yellow-Ladder-for-football-font-b-soccer-b-font-font-b-training.jpg" width="300" height="300" alt=""/><img src="images/55c0cd288288ad5ac45657e6eb484b98--soccer-sports-soccer-cleats.jpg" width="300" height="300" alt=""/><img src="images/_SOCCER__TRAINING__ESSENTIALS.jpg" width="300" height="300" alt=""/><img src="images/6-feet-x-12-feet-bownet-soccer-goal-go047d-athletics-soccer-equipment-soccer-goals-4.gif" width="300" height="300" alt=""/><img src="images/soccer-goals-gear-equipment-franklin-sports_1_1.jpg" width="300" height="300" alt=""/>
				</marquee>
			
			
</form>
</div>

<div class="container">

        <!-- Footer -->
        <footer>
            <div class="row">
			 <hr>
                <div class="col-lg-12">
                    <p>Copyright &copy; Reddy`s Football Equipment 2017</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

</div>


	

    <!-- javascript ================================================== -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
	
	

			
</body>

</html>