<?php
$pageTitle = "";
include_once("header.php");


$display = "";
$page_id = "1";
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='5'")or die(mysql_error());
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
					<h2>Billy Bob's Texas</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="5">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="5">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="5">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="5">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="5">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='5'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
						
					
					<p>2520 Rodeo Plaza</p>
					<p>Fort Worth, TX 76164</p>
					<p>(817) 624-7117<br>
					<p><a href="http://billybobstexas.com/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4">
					<a href="billy.php"><img src="images/billybobs/8106785747_8420f96dfa_o.jpg" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>	
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/billybobs/IMG_5808.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3354.0469636728913!2d-97.347729!3d32.79101399999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e76a6b51cc389%3A0x325b06118fe2753b!2sBilly+Bob&#39;s+Texas!5e0!3m2!1sen!2sus!4v1400724968885" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>Billy Bob's Texas is simply larger than life. The club has almost three acres under one roof, has been voted country music's club of the year a whopping 11 times, hosts the biggest names in the business every weekend, and has live bull-riding shows on Friday and Saturday night. Merle Haggard set a world record here when he bought the entire club a round of drinks. Life as a country-music fan is not complete unless you've visited the "World's Largest Honky-Tonk," where legends are made.</p>
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