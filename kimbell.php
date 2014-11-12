<?php
$pageTitle = "";
include_once("header.php");


$display = "";

include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='10'")or die(mysql_error());
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
					<h2>Kimbell Art Museum</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="10">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="10">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="10">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="10">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="10">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='10'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
									
					
					<p>333 Camp Bowie Boulevard</p>
					<p>Fort Worth, TX 76107</p>
					<p>(817) 332-8451</p>
					<p><a href="https://www.kimbellart.org/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="kimbell.php"><img src="images/kimbellart/IMG_6012.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/kimbellart/IMG_6008.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3355.6451484252593!2d-97.36513599999999!3d32.748612!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73c280e0fd07%3A0x64792626d529c510!2sKimbell+Art+Museum!5e0!3m2!1sen!2sus!4v1400724490121" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Kimbell Art Museum's holdings range in period from antiquity to the 20th century, including masterpieces from Fra Angelico and Caravaggio to Cézanne and Matisse. The Museum is one of the only institutions in the Southwest with a substantial collection of Asian arts, and has also assembled small but select groups of Mesoamerican and African pieces as well as Mediterranean antiquities.</p>
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