<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>

			<meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
			
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
			<meta name="description" content="###########" />
			<meta name="author" content="##############">
			<link rel="canonical" href="http://www.############.com"/>
			<link rel="shortcut icon" href="images/favfw.png" >
			
			
			<link rel="stylesheet" href="css/normalize.css" media="screen" type="text/css" />
		<link rel="stylesheet" href="css/styles.css">
			
			<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
			
			<link rel="stylesheet" href="css/flexboxgrid.css" media="screen" type="text/css" />  
			
			
    
			
<!-- Add jQuery library -->
			<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>	
			
<!-- Add fancyBox -->
			<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
			<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>	
			
			<script type="text/javascript" language="javascript">
				$(document).ready(function() {
					$("a.button").fancybox();
				});
			</script>
				
<!-- Mobile Nav -->				
			<script src="js/responsive-nav.js"></script>
			
			<link href='http://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700|Rokkitt:400,700|Montserrat:400,700' rel='stylesheet' type='text/css'>
			
			

			<script>
	  		for(var e,l='article aside footer header nav section time'.split(' ');e=l.pop();document.createElement(e))
			</script>

			<script type="text/javascript">
			function ratings(elem){
			var x = new XMLHttprequest();
			var url = 'rateParse.php';
			var a = document.getElementById(elem).value;
				var vars = "choice="+a;
				x.open("POST", url, true);
				   x.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			x.onreadystatechange - function() {
			if(x.readyState == 4 && x.status == 200){
				var return_data = x.responseText;
			document.getElementById("status").innerHTML = return_data;
				}
			}
			x.send(vars);
			document.getElementById("status").innerHTML = "processing..."
			}
			</script>

			<script type = "text/javascript">
			function show() {
    			document.getElementById('img1').style.visibility = 'visible';
			}
			</script>

<!-- Google Analytics Tracking -->
			<script>
			  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			
			  ga('create', 'UA-52031629-1', 'thevitte.com');
			  ga('send', 'pageview');

			</script>

			
	</head>

<body>



	<div class="main-wrapper">
		<header class="main-header">
		<img src="images/logo.png" title="" alt=""  class="mobile_logo">
		<div class="container">
		
		
		<ul class="fullnav">
				<li><a href="index.php"><img src="images/logo.png" title="" alt=""  class="logo"></a></li>
				<li><a href="attractions.php" title="">ATTRACTIONS</a></li>
				
				<li><a href="restaurants.php" title="">RESTAURANTS</a></li>
				<li><a href="nightlife.php" title="">NIGHT LIFE</a></li>
			</ul>
		
			<div role="navigation" id="foo" class="nav-collapse">
			
			
				<ul>
				        <li><a href="index.php">HOME</a></li>
					<li><a href="attractions.php" title="">ATTRACTIONS</a></li>
					
					<li><a href="restaurants.php" title="">RESTAURANTS</a></li>
					<li><a href="nightlife.php" title="">NIGHT LIFE</a></li>
      				</ul>
    			</div>

      			<a href="#nav" class="nav-toggle">Menu</a>
      		
      	
		
		
			
			
		</div>	
		</header>