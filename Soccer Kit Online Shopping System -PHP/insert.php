<?php 
//session_start();

if(isset($_POST['submit'])){
 $itemName = $_POST['name'];
 $itemPrice = $_POST['price'];
 $itemCat = $_POST['category'];
 $imgFile = $_FILES['pic']['name']; 
 $tmp_dir = $_FILES['pic']['tmp_name'];
 $imgSize = $_FILES['pic']['size'];
   
            $upload_dir = 'images/'; // upload directory
	
	        $imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		
			// valid image extensions
			$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		
			// rename uploading image
          /*image php variable*/            $itempic = rand(1000,1000000).".".$imgExt; //
				
			// allow valid image file formats
			if(in_array($imgExt, $valid_extensions))
			{			
				                      // Check file size '5MB'
				                     if($imgSize < 5000000)				
				                      {
					                   move_uploaded_file($tmp_dir,$upload_dir.$itempic);
				                       }
				                     else
				                      {
					                 //$errMSG = "Sorry, your file is too large.";
					                  echo("<script>alert('Sorry, your file is too large.');
                                           window.location.href='.php';
                                         </script>");
				                       }
			}
			
			else
			{
				//$errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";	
				 echo("<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');
                     
                </script>");	
			}

include 'DB_CONFIG/connect_db.php';
$sql= "INSERT INTO items (name,image,price,category) VALUES ('$itemName', '$itempic', '$itemPrice','$itemCat')";


$db->query($sql);

 if($db->affected_rows>0) {
	  echo("<script>alert('Record Added');
                     window.location.href='.php';
                </script>");
}
else
{
	 echo "Error";
}
	} 

/*	else{
		echo ("<script>if(confirm(\"Please Login to make Orders!.\")){  window.location.href = \"http://localhost/web3/login.php\"; } </script>");

	}*/
//}

/*if(isset($_GET['name'])){
 $Name = $_GET['name'];
 $Price = $_GET['price'];
 $IMG = $_GET['image'];
 

}*/
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit User - </title>
	<!--  favicon -->
   <link rel="shortcut icon" href="favicon.ico">

    <!--styles -->
    <link href="admin/css/bootstrap.min.css" rel="stylesheet">

    
        
  </head>

  <body>
<!--
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
    </div> -->

   <div class="container" >
<br>
<br>
    <div class="row"> 
	<div class="container">
	<br>
        



    </div>
	</div>
      
            <form method="POST" action="insert.php" class="row" enctype="multipart/form-data">
			<br>
	
		  
                <legend>Adding items <span class="blue"></span></legend>
            	<!-- One Row -->
				<div style="position:relative; left:350px;" class="row">
                
				<div class="col-lg-6">
					<div class="row">
										<div class="col-sm-2">
					 <label>Name</label>
					</div>					
					<div class="col-sm-6">
					<input name="name" type="text"  class="form-control" required>
					</div>
					
					</div>
                 <br>
			
 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-2">
					 <label>Price</label>
					</div>					
					<div class="col-sm-6">
					<input name="price" type="text"  class="form-control" required >
					</div>
					
				</div>
                 <br>
                 
                 <div class="row">
										<div class="col-sm-2">
					 <label>Photo</label>
					</div>					
					<div class="col-sm-6">
					
              	<input id="" type="file" name="pic" accept="image/*" required>
					</div>
					
				</div>
                 <br>
              
					
			 	<!-- One Row -->
					<div class="row">
										<div class="col-sm-2">
					 <label>Category</label>
					</div>					
					<div class="col-sm-6">
                    <select id="s" name="category" style="width:270px;" required>
                 <option value="">--Select--</option>   
                <option value="Equipment">Equipment</option>
                <option value="Drinks">Drinks</option>
                
            </select>
					<!--<input name="qty" type="number" class="form-control" required/>-->
					</div>
					
					</div>
                 
					<br>
						 
				
						<div class="row">
							<div class="col-sm-2">
					
					</div>
					<div class="col-sm-6">
					
					
                    <button type="submit" name="submit" class="btn btn-success">Add Item</button>
					</div>
					</div>
					</div>
				
					</div>
            </form>
      




<div class="container">

        <!-- Footer -->
        <footer>
            <div class="row">
			 <hr>
                <div class="col-lg-12">
                    <p>Copyright &copy; Reddy`s Football Equipment2017</p>
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
