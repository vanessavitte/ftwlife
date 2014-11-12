<?php 
$pageTitle = "";
include_once("header.php");


$display = "";
$pageId=$_POST['page'];
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='18'")or die(mysql_error());
while($row = mysql_fetch_array($sql)){
	$user = $row["user"];
	$body = $row["body"];
	$date = $row["posted_date"];

	$body = html_entity_decode($body);
	$display = '<div><p>' . $user . '<br />' . $date . '<br /> '. $body .'</p></div>';
}
?>

		<div class="container" id="noimg">
			
			<div class="row">
				<div class="col col-span-8">
					<h2>Fort Worth Water Gardens</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="18">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="18">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="18">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="18">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="18">
			<input type="hidden" name="choice" id="5" value="5">
			<input type="submit" value="5">	
		</form>	
	</div>		
<br>
<br>

<?php
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      	mysql_select_db(DB, $con) or die("Could not select database.");

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='18'");
include_once("avg.php");
?>
	<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>				
					
					<p>1502 Commerce Street</p>
					<p>Fort Worth, TX 76102</p>
					<p>(817) 392-7111</p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="water.php"><img src="images/watergardens/4028210488_3034bb8119_o.jpg" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/watergardens/IMG_5903.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3355.677656901433!2d-97.32663!3d32.747749!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e7114687844ef%3A0x3450e284cf2f0953!2sFort+Worth+Water+Gardens!5e0!3m2!1sen!2sus!4v1400723152133" width="350" height="300" frameborder="0" style="border:0"></iframe>
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Fort Worth Water Gardens is a beautiful and refreshing oasis adjacent to the Fort Worth Convention Center. Designed by Phillip Johnson, the Fort Worth Water Gardens is an architectural and engineering marvel to be enjoyed any time of the year. Visitors can experience a variety of water features as they wander through this relaxing urban park.</p>
				</div>
			
				<div class="col col-span-4">
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				
				</div>
			
				<div class="col col-span-4">
			
				</div>
				
			</div>
			
		</div>

<?php 
include_once("footer.php");?>