<?php
ob_start();
$pageId=$_POST['page'];

if(isset($_POST["choice"])){
	$choice = preg_replace('#[^0-9]#i', '', $_POST['choice']);
	if($choice > 5){
		echo "Not available";
		exit();
	}else if($choice < 1){
		echo "Not available";
		exit();
	}else{
	$ipaddress = getenv('REMOTE_ADDR');
	include_once("connect_db.php");
$con = mysql_connect(HOST, USER, PASS) or die("Could not connect to database.");
      mysql_select_db(DB, $con) or die("Could not select database.");
/*echo $choice;*/
/*$sql_check = mysql_query("SELECT * FROM rating_ip WHERE a_id='1' AND ipaddress='$ipaddress' LIMIT 1");
	$num_rows = mysql_num_rows($sql_check);
	if($num_rows > 0){
		echo '<p>Sorry, You have already rated this artivle</p>';
		exit();
	}
*/
$sql = mysql_query("SELECT ratings FROM blog_post WHERE id='$pageId'");
	while($row = mysql_fetch_array($sql)){
		$myNums = $row["ratings"];
		$kaboom = explode(",", $myNums);

		array_push($kaboom, $choice);
		$string = implode(",", $kaboom);

		$firstChar = substr($string, 0, 1);
		$lastChar = substr($string, strlen($string) - 1, 1);
		if($firstChar == ","){
			$string = $choice;
		}

		if ($lastChar == ",") {
			$string = substr($string, strlen($string) - 1, 1);
		}
	$update = mysql_query("UPDATE blog_post SET ratings='$string' WHERE id='$pageId'");
	/*echo $update;*/	
	$insert = mysql_query("INSERT INTO rating_ip (a_id, ipaddress) VALUES ('$pageId','$ipaddress')")or die(mysql_error());
	 if (mysql_num_rows){
      	header('Location: ' . $_SERVER['HTTP_REFERER']);
     	 }else{
      	header ("location: index.php");
    }
/*echo '<p>Thanks! you have given this location a rating of ' . $choice . '</p>';*/
exit();


	}	
	}
}



?>