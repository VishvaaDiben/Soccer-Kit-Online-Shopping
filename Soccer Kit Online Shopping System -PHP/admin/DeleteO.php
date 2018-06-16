
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
 
 $sql= "Delete FROM ".$itemType." where id=".$itemID."";
  $result=$db->query($sql);
  if($result)
  {
	 
	   header('location:manageO.php');
  }else
  {

  }




  ?>
