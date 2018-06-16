
  <?php
  session_start();
  if($_SESSION['user'] != "admin") {
      $home_url = '../login.php';
      header('Location: '.$home_url);
  }
 require_once '../DB_CONFIG/connect_db.php';
  //if(!isset($_SESSION["user_type"]))
     // die("Session not Valid, Please log in");

   $itemID = $_GET['id'];
   $itemType = $_SESSION['itemType'];
 
 $sql= "Update ".$itemType." SET status='Delivered' where id=".$itemID."";
  $result=$db->query($sql);
  if($result)
  {
	 
	   header('location:manageO.php');
  }else
  {
	  echo("<script>
	  alert(\"Something went wrong!\");
	  </script>");
	  header('location:manageO.php');
  }




  ?>
