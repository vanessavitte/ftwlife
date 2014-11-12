<?php
$pageTitle = "";
include_once("header.php");


$display = "";

include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='6'")or die(mysql_error());
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
					<h2>Fort Worth Botanic Gardens</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="6">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="6">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="6">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="6">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="6">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='6'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
						
					
					
					<p>3220 Botanic Garden Boulevard</p>
					<p>Fort Worth, TX 76107</p>
					<p>(817) 871-7686</p>
					<p><a href="http://fwbg.org/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="botanic.php"><img src="images/botanicgardens/181101275_2e9ed1d7e9_o.jpg" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/botanicgardens/IMG_6066.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">					
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1677.9801548881198!2d-97.36324482022567!3d32.740244584019656!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73c535ab312f%3A0x2e94226be033b03f!2sFort+Worth+Botanic+Garden!5e0!3m2!1sen!2sus!4v1400722713256" width="350" height="300" frameborder="0" style="border:0"></iframe>
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Fort Worth Botanic Garden, the oldest botanic garden in Texas, is a lush 109-acre tapestry of dappled shade and vibrant splashes of color. A peaceful haven nestled in the heart of Fort Worth's Cultural District, the Garden is home to over 2,500 species of native and exotic plants that flourish in its 21 specialty gardens.</p>
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