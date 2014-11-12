<footer class="main-footer">
			<p>&copy;2014 FortWorthLife.org All rights reserved</p>
		</footer>

		 <!-- JavaScript -->
		 
				<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
				<script type="text/JavaScript">
				$(document).ready(function (){
					$('#ratingdiv .undone').click(function(){
						var div = '#ratingdiv';	
						$(div).html('<img src="load.gif" />');
						var postdata = "rate=" + $(this).attr('rel');
						$.ajax({type: "POST",url: "rate.php",data: postdata,success: function(msg){$(div).html(msg)}});
					});	
					$('#ratingdiv .voted').live('click' , function(){
						alert('Already Done!');
					});
				});
				</script>
				<script>
      					var navigation = responsiveNav("foo", {customToggle: ".nav-toggle"});
    				</script>

	</div>
</body>
</html>