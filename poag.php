<?php
$pageTitle = "";
include_once("header.php");


$display = "";

include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='12'")or die(mysql_error());
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
					<h2>Poag Mahone's Irish Pub</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="12">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="12">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="12">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="12">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="12">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='12'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
										
					
					
					<p>700 Carroll Street</p>
					<p>Fort Worth, TX 76107</p>
					<p>(817) 529-9141</p>
				</div>
			
				<div id="detailimg" class="col col-span-4">
					<a href="poag.php"><img src="images/poag/IMG_5962.png" title="" alt="" width="" height="" class="cf"></a>
	
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/poag/159814685_a0462f0e32_o.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.523545660774!2d-97.35482200000001!3d32.75184000000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73e08cebbb13%3A0xe19cb00a79d108e4!2sPoag+Mahones!5e0!3m2!1sen!2sus!4v1401200151932" width="350" height="300" frameborder="0" style="border:0"></iframe>
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>Located in the heart of the bustling West 7th street Corridor of Fort Worth, Poag Mahone's Irish Pub is one of the city's premier night spots any night of the week. We offer a great atmosphere for watching your favorite sporting events. The pub boasts an incredible selection of beer, liquor and wine, fast and friendly service, a spacious patio, pool, darts, Golden Tee and other games. Come enjoy a pint of your favorite beer!</p>
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