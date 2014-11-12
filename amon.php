<?php
$pageTitle = "";
include_once("header.php");


$display = "";
$page_id = "1";
include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");

$sql = mysql_query("SELECT * FROM blog_post WHERE id='2'")or die(mysql_error());
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
					<h2>Amon Carter Museum of American Art</h2>
					
	<div id="ratings">
		<p><strong>Rate this location</strong></p>
		<br>
		<p>On a scale of 1 to 5</p>
		<br>
		<div id="numbers">
		<form action="rateParse.php" method="post">
		        <input type="hidden" name="page" id="1" value="2">
		        <input type="hidden" name="choice" id="1" value="1">
			<input type="submit" value="1">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="2">	
			<input type="hidden" name="choice" id="2" value="2">
			<input type="submit" value="2">
		</form>
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="2">	
			<input type="hidden" name="choice" id="3" value="3">
			<input type="submit" value="3">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="2">	
			<input type="hidden" name="choice" id="4" value="4">
			<input type="submit" value="4">
		</form>	
		<form action="rateParse.php" method="post">
			<input type="hidden" name="page" id="1" value="2">	
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

	$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='2'");
include_once("avg.php");
?>
	<p><strong><?php echo $rating; ?></strong></p>
	<div id="status"></div>
	
</div>
			
					
					<p>3501 Camp Bowie Boulevard</p>
					<p>Fort Worth, TX 76107</p>
					<p>(817) 738-1933</p>
					<p><a href="http://www.cartermuseum.org/" target="_blank">Website</a></p>
				</div>
			
				<div id="detailimg" class="col col-span-4" >
				<a href="amon.php"><img src="images/americanart/IMG_6048.png" title="" alt="" width="" height="" class="cf"></a>
	
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
					<img src="images/americanart/IMG_6021.png" title="" alt="" width="" height="300" class="cf">
				
				</div>
			
				<div class="col col-span-4">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.6704244905404!2d-97.36901100000003!3d32.747941!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e73c18d1cc46d%3A0x28328f2a4ef5b001!2sAmon+Carter+Museum!5e0!3m2!1sen!2sus!4v1400724747582" width="350" height="300" frameborder="0" style="border:0"></iframe>
				</div>
				
			</div>
			
			<div class="row">
				<div class="col col-span-8">
				<p>The Amon Carter Museum opened in January 1961 to house the collection of western art amassed by Fort Worth publisher and philanthropist Amon G. Carter, Sr. (1879–1955). Expanding on Carter's original collection of 400 paintings, drawings, and works of sculpture by Frederic Remington and Charles M. Russell—the single most important collection of works by these artists—the museum now encompasses a wide range of nineteenth- and twentieth-century American paintings, drawings, prints, and sculpture, as well as photographs from the early days of the medium to the present.</p>
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