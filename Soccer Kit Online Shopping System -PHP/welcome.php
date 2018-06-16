<?php
session_start();
require_once './DB_CONFIG/connect_db.php';
$user = $_SESSION['user'];
$sql1= "SELECT * FROM orders where order_by='".$user."' order by status desc";
$result1=$db->query($sql1);

?>

<!DOCTYPE html>
<!-- 

 -->

<head>
<title>Welcome</title>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <link rel="stylesheet" href="css/style.css">

	<!--styles -->
	<link href="admin/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
	#header-wrapper #header #logo h3 a {
	color: white;
}
    #header-wrapper #header #logo p {
	color: white;
}
    </style>
</head>

<body> 
<div id="header-wrapper">
	<div id="header">
	    <div id="logo">
          <h3><a href="index.php">Reddy`s Football Equipment</a></h3>
			<p>Passion For The Game</p>
		</div>
		<div id="menu">
			<ul>
                
                <?php

				if(isset($_SESSION['user']))
				{
					echo ("<li class='current_page_item'><a href=\"welcome.php\" >My Page</a></li>");
				}else
				{
					echo ("<li ><a href=\"index.php\" accesskey='1' >Home</a></li>");
				}

				?>
                
				
				<li><a href="types.php" accesskey="2" title="">Equipment</a></li>

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
		</div>
	</div>


	
</div>
<br/><br/>
<div class="container">

 <form name="form" id="form1" class="form-horizontal"  method="POST">
				
		<div class="row"><h2 style="color: green">Welcome!<span style="color: red"> <?php echo $_SESSION['user']; ?></span>, You have successfully Logged in!</h2></div>
        
        
        <div class="table-responsive cart_info" >
          
				<table class="table table-condensed" style="background-color: blue">
					<thead style="background-color: black">
						<tr class="cart_menu">
							<td class="image" style="padding-left:15px;">Name</td>
							<td class="price">Size</td>
							<td class="price">Price</td>
							<td class="quantity">Qty</td>
							<td class="total">Subtotal</td>
							<td></td>
						</tr>
					</thead>
					<tbody >
                      <?php

//WHERE cart_user_id ='$_SESSION[user]'											 												
$sql = " SELECT * FROM orders WHERE order_by ='$_SESSION[user]' GROUP BY item_name ORDER BY item_price DESC" ;

      
						$result = mysqli_query($db, $sql)or die ('Error! yo.'); 
						$i = 0;	
						if (mysqli_num_rows($result) > 0) 
						{ 	
						$sum=0;	
									                                             
   						while($row = mysqli_fetch_assoc($result))  
						{
							
							
						?>  
						<tr>
							
							<td class="cart_description">
								<p style="color:#FFF"><?php echo $row['item_name']; ?></p>
							</td>
                            <td class="cart_for_size">
								<p style="color:#FFF"><?php echo $row['size']; ?> </p>
							</td>
							<td class="cart_price">
								<p style="color:#FFF">$<?php echo $row['item_price']; ?> </p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
                                
<!--<a class="cart_quantity_up" id="target1" href="update_cart.php?action=increase&id=<?php echo $row['item_qty'];?>" > + </a>-->
<?php

//WHERE cart_user_id ='$_SESSION[user]'	

		
/*$sql4 = "SELECT * FROM orders WHERE item_name = '$row[item_name]' AND order_by ='$_SESSION[user]'	"; 
$result4 = mysqli_query($db, $sql4) or die ('Error! yo.');
$row_cnt = mysqli_num_rows($result4);*/

/*$sql4= " SELECT SUM(item_qty) FROM orders WHERE item_name='$row[item_name]' AND order_by='$_SESSION[user]'
GROUP BY item_name, order_by ";
$result4 = mysqli_query($db, $sql4) or die ('Error! yoyoyo.');*/

$sql4 = "SELECT SUM(item_qty) as memTotal, item_name, order_by FROM orders WHERE order_by='$_SESSION[user]' AND item_name='$row[item_name]'  ";
$result4 = mysqli_query($db, $sql4) or die ('Error! yoyoyo.');
$a =$result4->fetch_object()->memTotal ;
?>                                   
<p style="color:#FFF"><?php echo $a;  ?> </p>

<!--<input class="cart_quantity_input" id="output" type="text" name="quantity" style="color:#000" value=<?php echo $num_rows4; ?> autocomplete="off" size="2">-->

       
<!--<a class="cart_quantity_down" id="target2" href="update_cart.php?action=decrease&id=<?php echo $row['item_qty'];?>"> - </a>-->
								</div>
<script>
$('#target').click(function() {
    $('#output').html(function(i, val) { return val*1+1 });
});
$('#target2').click(function() {
    $('#output').html(function(i, val) { return val*1-1 });
});
</script>     
                         
							</td>                        
							<td class="cart_total">
								<p class="cart_total_price" style="color:#FFF">$<?php
								
								$total = ($a * $row['item_price']);
								//echo $total ;

								echo $english_format_number = number_format($total, 2, '.', '');
								  ?> </p>
							</td>
                           
							<!--
                            <td class="cart_delete">
<a class="cart_quantity_delete" href="update_cart.php?action=delete&id=<?php echo $row['item_name'];?>"><i class="fa fa-times"></i></a>
							</td>
                            -->
						</tr>

<?php			   
++$i;
}}
?>				    
					</tbody>
                     
				</table>
               
			</div>
        
	 <div class="row">

		 <div class="col-lg-3"></div>
		 <div class="col lg-4">
	  <h2>What are you waiting for?? </h2><a class="btn btn-danger" href="types.php">Order Now!!</a>
		 </div>
	 </div>
</form>

	<div class="row">
		<div class="col-md-12">
			<h4>View your order status and previous orders here</h4>
			<div class="table-responsive">


				<table class="table table-bordred table-hover">

					<thead style="background-color: black">

					<th>ID</th>
					<th>Item Name</th>
					<th>Item Price</th>
					<th>Item Qty</th>
					<th>Order By</th>
					<th>Date</th>
					<th>Status</th>

					</thead>
					<tbody>
					<?php
					if(mysqli_num_rows($result1)>0) {
						while ($row1 = mysqli_fetch_array($result1)) {

							echo("<tr>
        <td>$row1[0]</td>
        <td>$row1[1]</td>
        <td>$row1[2]</td>
        <td>$row1[3]</td>
        <td>$row1[4]</td>
        <td>$row1[5]</td>
        ");

        if($row1[6]=="Pending") echo ("<td style=\"background-color: red\">$row1[6]</td>");
else
	echo ("<td>$row1[6]</td>");


   echo "</tr>";

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
		
	
</body>
</html>
