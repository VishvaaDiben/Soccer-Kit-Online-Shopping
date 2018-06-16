<?php
session_start();
if($_SESSION['user'] != "admin") {
    $home_url = '../login.php';
    header('Location: '.$home_url);
}

require_once '../DB_CONFIG/connect_db.php';
$sql= "SELECT * FROM feedback";
$result=$db->query($sql);
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
          <a class="brand" href="index.php"></a>
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
	<div id="displayAll" class="row">
<div class="col-md-12">
        <h4>Viewing Feedback</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped table-hover">
                   
                   <thead>
                   
                    <th>ID</th>

                     <th>Email</th>
                    <th>Message</th>
                    <th>Date Time</th>
                   </thead>
<tbody>
<?php
  if(mysqli_num_rows($result)>0) {
      while ($row = mysqli_fetch_array($result)) {

              echo("<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>

    </tr>");

      }
  }
?>


    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	
</div>





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

             </script>


  </body>
</html>
