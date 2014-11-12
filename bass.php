<?php
$pageTitle = "";
include_once("header.php");


$display = "";
$page_id = "1";
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='4'")or die(mysql_error());
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
					<h2>Bass Performance Hall</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="4">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="4">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="4">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="4">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="4">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='4'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
							
					
					<p>2520 Rodeo Plaza</p>
					<p>Fort Worth, TX 76164</p>
					<p>(817) 624-7117</p>
					<p><a href="http://www.fortworthstockyards.org/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="bass.php"><img src="images/basshall/IMG_5914.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/basshall/3991477958_930e8e86c6_o.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d838.8532522502771!2d-97.32978299999999!3d32.754774!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e713f81e95f5d%3A0xcfa09e53e4176a0!2sBass+Performance+Hall!5e0!3m2!1sen!2sus!4v1400724363818" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Nancy Lee and Perry R. Bass Performance Hall complex is the crown jewel of a city which boasts the nation's third largest cultural district. It is also an important symbol of one of the most successful downtown revitalization efforts in the country. Built entirely with private funds, Bass Performance Hall is permanent home to the Fort Worth Symphony Orchestra, Texas Ballet Theater, Fort Worth Opera, and the Van Cliburn International Piano Competition and Cliburn Concerts. It also hosts special productions of Casa Mañana Musicals, and presents Performing Arts Fort Worth's "Hall Series", a popular array of eclectic entertainment.</p>
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