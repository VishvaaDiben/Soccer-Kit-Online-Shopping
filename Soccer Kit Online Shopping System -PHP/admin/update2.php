<?php
//session_start(); // Starting Session
include '../DB_CONFIG/connect_db.php';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if(isset($_POST['save']))
{
	$id1 = $_POST['id1'];
	$id2 = $_POST['id2'];
	$id3 = $_POST['id3'];
	
$sql1 =  "UPDATE items SET name='$id1', price='$id2 ' WHERE id = '$id3' "; 



                     if (mysqli_query($db, $sql1))  {
                     echo("<script>alert('Records Updated Successfully!');
                     window.location.href='update1.php';
                     </script>");
                       } 
	
                      else{
   	                  echo("<script>alert('ERROR: Could not able to execute $sql1.  . mysql_error()');
                      window.location.href='update1.php';
                      </script>");
                       }
}
	




elseif(isset($_POST['delete']))
{
	$id1 = $_POST['id1'];
	$id2 = $_POST['id2'];
	$id3 = $_POST['id3'];
	
	$sql2 = "DELETE FROM items WHERE id = '$id3' AND name = '$id1'";
	

if (mysqli_query($db, $sql2)) {
      echo("<script>alert('Records Deleted Successfully!');
                     window.location.href='update1.php';
                </script>");
} 
	
else{
           	 echo("<script>alert('ERROR: Could not able to execute $sql2.  . mysql_error()');
                     window.location.href='update1.php';
                </script>");
}
	
}





mysqli_close($db);
?>