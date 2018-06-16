<?php 
session_start();
 if($_SESSION['user'] != "admin") {
	 $home_url = '../login.php';
	 header('Location: '.$home_url);
 }
 $itemID = $_GET['id'];
 $itemType = $_SESSION['itemType'];
require_once '../DB_CONFIG/connect_db.php';
$sql= "SELECT * FROM ".$itemType." where id=".$itemID."";
$result=$db->query($sql);
$Name="";
$Username="";
$DOB="";
$Email="";
$Password="";
$TelNo="";
$ID = "";
$Address = "";
if(mysqli_num_rows($result)>0) {
      
	 while($row = $result->fetch_assoc()) {
	 $Name = $row["name"];
	 $Username=$row["username"];
	 $DOB=$row["dob"];
	 $Email=$row["email"];
	 $Password=$row["password"];
	 $TelNo=$row["tpnumber"];
		 $ID = $row["id"];
		 $Address = $row["Address"];
	 
	 
	 }
}
else
{
	 header('location:index.php');
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit User - </title>
	<!--  favicon -->
   <link rel="shortcut icon" href="favicon.ico">

    <!--styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    
        
  </head>

  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="index.html"></a>
        </div>
      </div>
    </div>

   <div class="container">
<br>
<br>
    <div class="row"> 
	<div class="container">
	<br>

  <a href="index.php" <button id="showAll" class="btn btn-success btn-md">Manage Users</button></a>
  <a href="manageO.php"<button class="btn btn-warning btn-md">Manage Orders</button></a>
 <a href="feedback.php"	<a href="feedback.php"<button class="btn btn-info btn-md">View Feedback</button></a>

	<a href="../logout.php"><button class="btn btn-danger btn-md">Logout</button></a>



    </div>
	</div>
        <div>
            <form method="POST" action="Update.php" class="row">
			<br>
	
		  
                <legend>Editing - <span class="blue"><?php echo $Name; ?></span></legend>
            	<!-- One Row -->
				<input type="hidden" name="ID" value="<?php echo $ID; ?>">
					<div class="row">
										<div class="col-sm-1">
					 <label>Name</label>
					</div>					
					<div class="col-sm-3">
					<input name="name" type="text" value="<?php echo $Name; ?>" class="form-control" >
					</div>
					
					<div class="col-sm-1">
					 <label>Email</label>
					</div>					
					<div class="col-sm-3">
					<input name="email" type="text" value="<?php echo $Email;  ?>" class="form-control" >
					</div>
					
					</div>
                    <br>
			
 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-1">
					 <label>Username</label>
					</div>					
					<div class="col-sm-3">
					<input name="Username" type="text" value="<?php echo $Username; ?>" class="form-control" readonly>
					</div>
					
					<div class="col-sm-1">
					 <label>Password</label>
					</div>					
					<div class="col-sm-3">
					<input name="Password" type="text" value="<?php echo $Password;  ?>" class="form-control" >
					</div>
					
					</div>
                    <br>
              
					
			 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-1">
					 <label>Date of Birth</label>
					</div>					
					<div class="col-sm-3">
					<input name="dob" type="text" value="<?php echo $DOB;  ?>" class="form-control" >
					</div>
					
					<div class="col-sm-1">
					 <label>Tel No</label>
					</div>					
					<div class="col-sm-3">
					<input name="telno" type="text" value="<?php echo $TelNo; ?>" class="form-control" >
				
                    </div>
					
					</div>
                    <br>
			
 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-1">
					 <label>Address</label>
					</div>					
					<div class="col-sm-3">
					<input name="Address" type="text" value="<?php echo $Address; ?>" class="form-control" readonly>
					</div>
					
						 
				
						<div class="row">
							<div class="col-sm-1">
					
					</div>
					<div class="col-sm-3">
                      </div>
					
					</div>
                    <br>
                    
					
					
                    <button type="submit" class="btn btn-success">Update</button>
					</div>
					</div>
		
            </form>
        </div>

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
