<?php 
$pageTitle = "";
include_once("header.php");


$display = "";
$pageId=$_POST['page'];
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='17'")or die(mysql_error());
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
					<h2>Wired Willy's Taphouse</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="17">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="17">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="17">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="17">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="17">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='17'");
include_once("avg.php");
?>
	<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>				
					
					<p>710 Carroll Street</p>
					<p>Fort Worth, TX 76107</p>
					<p>(817) 945-1378</p>
					<p><a href="http://www.wiredwillys.com/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4">
					<a href="wired.php"><img src="images/wired/IMG_5965.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/wired/9405558383_477dd39672_o.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.5310274766334!2d-97.35488029999999!3d32.75164140000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73e08dae4709%3A0x26a00756ca46bdc5!2s710+Carroll+St!5e0!3m2!1sen!2sus!4v1401199894515" width="350" height="300" frameborder="0" style="border:0"></iframe>
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>Wired Willy's offers a great relaxing atmosphere that always makes you feel right at home. Service with a smile and a friendly conversation is what sets them apart. Try one of their 20 draft beers, your favorite liquor or even our signature Texas Truck Bomb!wiches and entrees, plus a wide assortment of martinis, microbrews and wines by the glass or bottle.</p>
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