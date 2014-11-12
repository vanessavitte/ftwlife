<?php 
$pageTitle = "";
include_once("header.php");


$display = "";
$pageId=$_POST['page'];
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='20'")or die(mysql_error());
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
					<h2>Fort Worth Stockyards</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="20">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="20">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="20">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="20">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="20">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='20'");
include_once("avg.php");
?>
	<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>				
					
					<p>103 East Exchange Ave.</p>
					<p>Fort Worth, TX 76164</p>
					<p>(817) 625-9715</p>
					<p><a href="http://www.fortworthstockyards.org/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4">
					<a href="stockyards.php"><img src="images/stockyards/8608944720_21835001c1_o.jpg" title="" alt="" width="" height="" class="cf"></a>
				
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8" >
					<img src="images/stockyards/8159374156_f81a8202bc_o.png" title="" alt="" width="" height="" id="longimg" class="cf">
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3354.0437203577126!2d-97.34557900000001!3d32.79110000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e76a1557c8d3b%3A0xce576099d2758d9f!2sFort+Worth+Stockyards+National+Historic+District!5e0!3m2!1sen!2sus!4v1400724917420" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Fort Worth Stockyards is one of the main attractions of Fort Worth. The Stockyards is a historic district of Fort Worth that was established in 1866 when millions of cattle were trailed though the stockyards. The Stockyards is the continues to have cattle drives twice a day.</p>
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