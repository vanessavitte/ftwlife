<?php 
$pageTitle = "";
include_once("header.php");


$display = "";
$pageId=$_POST['page'];
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='21'")or die(mysql_error());
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
					<h2>Coyote Drive-In</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="21">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="21">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="21">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="21">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="21">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='21'");
include_once("avg.php");
?>
	<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>				
					
					<p>223 NE 4th Street</p>
					<p>Fort Worth, TX 76164</p>
					<p>(817) 668-5665</p>
					<p><a href="http://coyotedrive-in.com/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="coyote.php"><img src="images/coyotedrivein/IMG_5880.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/coyotedrivein/IMG_5885.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3354.9690784220365!2d-97.337534!3d32.766555!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e714f6a154b23%3A0xb3518114d06ad2ff!2sCoyote+Drive-In!5e0!3m2!1sen!2sus!4v1400723197320" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>Coyote Drive-In was founded in 2011 by four guys who were longing for a great way to leave the rat race and constant connectivity behind. They envisioned a simple place to escape the chaos and hang out with friends and family. Enjoy a cold one together. Admire the stars shining bright up above. Relish the laughs while creating memories. It was in their quest for a laid back oasis that the concept for Coyote Drive-In was born.</p>
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