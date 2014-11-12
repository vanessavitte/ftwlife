<?php
while($row = mysql_fetch_array($sql)){
	$myNums = $row["ratings"];
		$kaboom = explode(",", $myNums);
		$count = count($kaboom);
		$sum = array_sum($kaboom);
		$avg = $sum / $count;
		$roundit = floor($avg);

		if ($roundit == 0) {
			$rating = "This location has not yet been rated.";
		}else if($count == 1){
			$rating = "Average rating for this location is currently $roundit<br /> This location has been rated by $count person.";	
		}else if($count > 1){
			$rating = "Average rating for this location is currently $roundit<br /> This location has been rated by $count people.";
		}else{
			$rating = "Sorry, There is an error in the system... Please try refreshing the page";

		}
}
?>