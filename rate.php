<?php
	for($i=1;$i<=5;$i++)
	{
		if($i <= $_POST['rate'])
			$class="done";
		else
			$class="fade";

		<a href="#" class="<?php echo $class ?> voted">star rated</span>

	}
?>
