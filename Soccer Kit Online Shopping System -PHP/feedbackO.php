<?php 


$Email="";
$Message="";


if(isset($_POST['email'])) {

		$Email = $_POST['email'];
		$Message = $_POST['message'];



		require_once './DB_CONFIG/connect_db.php';
		$sql = "INSERT INTO feedback (email,message,date) VALUES ('$Email','$Message', NOW())";


		$db->query($sql);

		if ($db->affected_rows > 0) {


			echo("<script>alert(\"Message Recieved. Thanks.\"); </script>");

			header('location:index.php');
		} else {
			echo "Error";
		}

}

?>




