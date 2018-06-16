
  <?php
  session_start();
  if($_SESSION['user'] != "admin") {
   $home_url = '../login.php';
   header('Location: '.$home_url);
  }
 require_once '../DB_CONFIG/connect_db.php';
  //if(!isset($_SESSION["user_type"]))
     // die("Session not Valid, Please log in");



 $Name = $_POST['name'];
 $Email = $_POST['email'];
 $Password = $_POST['Password'];
 $Dob = $_POST['dob'];
 $TelNo = $_POST['telno'];
 $ID = $_POST['ID'];
 
 $sql= "Update allusers SET name='".$Name."', email='".$Email."', password='".$Password."', dob='".$Dob."', tpnumber='".$TelNo."' where id=$ID ";

  $result=$db->query($sql);


  if($result)  {
	 
	   header('location:index.php');
  }else
  {
	  echo("<script>
	  alert(\"Something went wrong!\");
	  </script>");
	  header('location:index.php');
  }




  ?>
