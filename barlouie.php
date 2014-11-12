<?php
$pageTitle = "";
include_once("header.php");


$display = "";
$pageId=$_POST['page'];
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='3'")or die(mysql_error());
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
				<h2>Bar Louie</h2>
				
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="3">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="3">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="3">
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="3">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">	
			<input type="hidden" name="page" id="1" value="3">
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='3'");
include_once("avg.php");
?>
<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
</div>
						
				
				<p>2973 W 7th St.</p>
				<p>Ft. Worth, TX 76107</p>
				<p>(817)566-9933</p>
				<p><a href="http://www.barlouieamerica.com/locations/Fort-Worth.aspx" target="_blank">Website</a></p>
			
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href=""><img src="images/barlouie/IMG_5977.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/barlouie/2600440325_dcdeeca0ae_o.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.5557179363695!2d-97.36005199999998!3d32.750986000000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73e777cee71d%3A0x3bcbf212aad64ec7!2sBar+Louie+Ft.+Worth!5e0!3m2!1sen!2sus!4v1401199638088" width="350" height="300" frameborder="0" style="border:0"></iframe>
			
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>Bar Louie is a casual neighborhood place that features warm, upbeat surroundings with modern food
						and handcrafted signature cocktails. It offers an extensive selection of appetizers, sandwiches and
						entrees, plus a wide assortment of martinis, microbrews and wines by the glass or bottle.</p>
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