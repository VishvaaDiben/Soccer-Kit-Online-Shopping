<?php
session_start();
?>
<!DOCTYPE html>
<head>
<title>Reddy`s Football Equipment</title>
<script type="text/javascript" src="script.js"></script>
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
    background-color: green;
    color: white;
}
th, td {
    padding: 5px;
    text-align: left;
}
#header-wrapper {
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
	    <h1><a href="#">Reddy`s Football Equipment</a></h1>
			<p>Passion For The Game...</p>
		</div>
		<div id="menu">
			<ul>
                 <?php

				if(isset($_SESSION['user']))
				{
					echo ("<li ><a href=\"welcome.php\" >My Page</a></li>");
				}else
				{
					
				}

				?>
				<li class="current_page_item"><a href="index.php" accesskey="1" title="">Home</a></li>
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

			

				
				<li><a href="feedback.php" >Feedback</a></li>
				
			</ul>
		</div>
	</div>


	<div id="banner">
		<div class="img-border"> <a href="http://www.fifa.com/about-fifa/who-we-are/the-game/index.htmlt"><img src="images/Soccer_Equipment.jpg" width="1120" height="450" alt=""/></a> </div>
	</div>
</div>
<div id="wrapper">
	<div id="page-wrapper">
	  <div id="page">
<div id="page2">
  <div id="content">
 
<div id="calendar">
     <p id="calendar-day"></p>
     <p id="calendar-date"></p>
     <p id="calendar-month-year"></p>
    </div>
    
       <h2><em>Football History</em></h2>
	       <ul><ul><li><p>Records trace the history of <a title="soccer" href="http://www.fifa.com/about-fifa/who-we-are/the-game/index.html">soccer</a> back more than 2,000 years ago to ancient China. Greece, Rome, and parts of Central America also claim to have started the sport; but it was England that transitioned soccer, or what the British and many other people around the world call “football,” into the game we know today.</p></li></ul>
	        <h2><em>About Us</em></h2> <ul><li><p>Malaysia is in Southeast Asia. Geographic coordinates: 2 30 N, 112 30 E. The size of Malaysia is slightly larger than the state of New Mexico, USA. Malaysia consists of two parts: West Malaysia, also called Peninsular Malaysia or Malaya; and East Malaysia. The two parts are 403 miles [650km] apart and are separated by the South China Sea. 

West Malaysia is bordered on the north by Thailand, on the east by the South China Sea, on the south by Singapore [separated by the narrow Johore Straits], and on the west by the Straits of Malacca and the Andaman Sea. There are 11 states and two federal territories in West Malaysia.

East Malaysia is bordered on the north by the South China Sea and the Sulu Sea, on the east by the Celebes Sea, and on the south and west by Kalimantan - the Indonesian part of Borneo. There are 2 states and one federal territory in East Malaysia. Along the coast is the independent nation of Brunei.

The country of Malaysia was formed in 1963 through a federation of the former British colonies of Malaya, including Sabah and Sarawak in East Malaysia, and the island of Singapore. In 1965, the island of Singapore formed it's own nation country of Singapore.

Although West Malaysia makes up only 31% of the country's area, it has more than 80% of its people. Most of the total population of nearly 23 million, are concentrated on the west coast of West Malaysia. West Malaysia has 11 states: Perlis, Kedah, Pinang [Penang], Perak, Kelantan, Terengganu, Pahang, Selangor, Negeri Sembilan, Melaka [Malacca] and Johor; and two Federal Territories [Wilayah Persekutuan] which are coextensive cities of Kuala Lumpur and Putrajaya. East Malaysia has 2 states: Sabah and Sarawak and one federal territory which is the island of Labuan.</p></li></ul></ul>

            <br><br><br>
    



<script type="text/javascript">

    function rollover(my_image)
    {

        my_image.src = 'images/welcome.jpg';

    }






    function mouseaway(my_image)
    {

        my_image.src = "images/index_map_malaysia.gif";

    }

</script>



<img src="images/index_map_malaysia.gif" onmouseover="rollover(this)" 
onmouseout="mouseaway(this)" />

<div id="table"></div>
	        <!--<p class="button-style"><a href="#">add a button</a></p> -->
  </div>
	      <p>&nbsp;</p>
</div>
</div>
        </div>
    </div>
</body>
</html>
