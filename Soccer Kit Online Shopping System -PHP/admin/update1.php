<?php
session_start();
include '../DB_CONFIG/connect_db.php';
if($_SESSION['user'] != "admin") {
    $home_url = '../login.php';
    header('Location: '.$home_url);
}




?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Admin Home </title>
  

    <!--  styles -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!--  favicon -->
    <link rel="shortcut icon" href="favicon.ico">

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
        <a href="index.php" ><button id="showAll" class="btn btn-success btn-md">Manage Users</button></a>
	   <a href="manageO.php"><button class="btn btn-warning btn-md">Manage Orders</button></a>
        <a href="feedback.php"><button class="btn btn-info btn-md">View Feedback</button></a>
        <a href="insert.php"><button class="btn btn-primary">Add Item</button></a>
        <a href="update1.php"><button class="btn btn-default">Update Item</button></a>
        <a href="../logout.php"><button class="btn btn-danger btn-md">Logout</button></a>




    </div>
	</div>
    
	<div class="container">
<form method="" action="">


               
				<div class="row">
				<br>

					<legend>Jersey</legend>
<?php

$sql ="SELECT * FROM items WHERE category = 'Jersey'";
$query = mysqli_query($db,$sql) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query) > 0) 
						{                                         
    
   						while($row = mysqli_fetch_array($query)) 
						{
							?>
										
					<div class="col-lg-3">
						<p style="font-size:20px; color:Blue;"><?php echo $row['name']; ?></p>
						<p><img src="../images/<?php echo $row['image']; ?>" width="250" height="250" alt=""/></p>
                        <p hidden=""><?php echo $row['id'];?></p>
						<p style="font-size:20px; fonnt-style:Bold; color:Red;">RM <?php echo $row['price']; ?></p>
                        
						
                        <!--<a href="#?name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>" class="uname" data-toggle='modal' data-target='#useredit'><input type="button" class="btn btn-danger" value="Edit Here"/></a>-->
                         <a href="#my_modal" data-toggle="modal" data1-id="<?php echo $row['name']; ?>" data2-id="<?php echo $row['price']; ?>" data3-id="<?php echo $row['id']; ?>"><input type="button" class="btn btn-danger" value="Edit Here" /></a>

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

$sql ="SELECT * FROM items WHERE category = 'Shoe'";
$query = mysqli_query($db,$sql) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query) > 0) 
						{                                         
    
   						while($row = mysqli_fetch_array($query)) 
						{
							?>
					
				  <div class="col-lg-3">
					  <p style="font-size:20px; color:Blue;"><?php echo $row['name']; ?></p>
					  <p><img src="../images/<?php echo $row['image']; ?>" width="250" height="250" alt=""/></p>
					<p hidden=""><?php echo $row['id'];?></p>
					<p style="font-size:20px; color:Red;">RM <?php echo $row['price']; ?></p>
				    <!--<a href="#?name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>" class="uname" data-toggle='modal' data-target='#useredit'><input type="button" class="btn btn-danger" value="Edit Here" /></a>-->
                    <a href="#my_modal" data-toggle="modal" data1-id="<?php echo $row['name']; ?>" data2-id="<?php echo $row['price']; ?>" data3-id="<?php echo $row['id']; ?>"><input type="button" class="btn btn-danger" value="Edit Here" /></a>
                   
					</div>
                    
                    <?php
                    }
					}
						?>
                        

</div>			
<br><br>	  

<div class="row">
                
					<legend>Equipment</legend>
<?php

$sql ="SELECT * FROM items WHERE category = 'Equipment'";
$query = mysqli_query($db,$sql) or die ;
							

						//$result = mysql_query($sql); 

						if (mysqli_num_rows($query) > 0) 
						{                                         
    
   						while($row = mysqli_fetch_array($query)) 
						{
							?>
					
				  <div class="col-lg-3">
					  <p style="font-size:20px; color:Blue;"><?php echo $row['name']; ?></p>
					  <p><img src="../images/<?php echo $row['image']; ?>" width="250" height="250" alt=""/></p>
					<p hidden=""><?php echo $row['id'];?></p>
					<p style="font-size:20px; color:Red;">RM <?php echo $row['price']; ?></p>
				    <!--<a href="#?name=<?php echo $row['name']; ?>&price=<?php echo $row['price']; ?>" class="uname" data-toggle='modal' data-target='#useredit'><input type="button" class="btn btn-danger" value="Edit Here" /></a>-->
                    <a href="#my_modal" data-toggle="modal" data1-id="<?php echo $row['name']; ?>" data2-id="<?php echo $row['price']; ?>" data3-id="<?php echo $row['id']; ?>"><input type="button" class="btn btn-danger" value="Edit Here" /></a>
                   
					</div>
                    
                    <?php
                    }
					}
						?>
                        

</div>			

			
				
			
			
</form>
</div>

<div class="modal" id="my_modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" align="center">Edit Item</h4>
      </div>
      <form method="POST" action="update2.php" enctype="multipart/form-data" >
      <div class="modal-body">
        <label>Name:</label>
        <input size="30px" type="text" name="id1" value=""/>
        &nbsp;&nbsp;
        <label>Price:</label>
        <input type="text" name="id2" value=""/>
        <input size="5px" type="hidden" name="id3" value=""/>
      </div>
      
      
      
      <div class="modal-footer" >
         <button type="submit" class="btn btn-success" name="save" style="position:relative; right:220px;">Save Changes</button> 
         <button type="submit" class="btn btn-danger" name="delete" style="position:relative; right:130px;">Delete Record</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" style="position:relative; right:50px;">Close</button>
      </div>
      </form>
    </div>
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

  <footer class="white navbar-fixed-bottom">

  </footer>


  <!-- Le javascript
  ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

             <script>

                 $(document).ready(function () {
                     $('.dropdown-toggle').dropdown();
                     $("[data-toggle=tooltip]").tooltip();
                 });
				 
				$('a[href="#my_modal"]').on('click',function(){
   var id1 = $(this).attr('data1-id');
    console.log(id1);
  $('input[name="id1"]').val(id1);
  
  var id2 = $(this).attr('data2-id');
    console.log(id2);
  $('input[name="id2"]').val(id2);
   
    var id3 = $(this).attr('data3-id');
    console.log(id3);
  $('input[name="id3"]').val(id3);
  
});


             </script>


  </body>
</html>
