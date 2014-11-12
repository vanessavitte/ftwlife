<?php
require('dbconnection.php');
function login_check($username,$password){
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $query="SELECT UserName,Password FROM Login WHERE UserName='$username' AND Password='$password'";
      $result=mysqli_query($con, $query);
      if (mysqli_num_rows($result)){ 
          session_start();         
          $_SESSION['login']=1;                 
          header ("location: index.php");
      }else{
          header ("location: login.php");
      }
}         

      
function create_blog($title, $post){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $query="INSERT INTO Post(Title, Content) VALUES('$title','$post')";
      mysqli_query($con, $query);  
    if (mysqli_num_rows){
      header ("location: blogpost.php");
      }else{
      header ("location: blog.php");
    }
    }
     
function edit_post($postid,$title,$content){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="UPDATE Post SET Title='$title', Content='$content' WHERE postid='$postid'";
      $result=mysqli_query($con, $sql) or die(mysqli_error());
      
     if($result)
     {
     return true;
     }else{
     return false;
     }
     
     }
     
function delete_post($postid){
     require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="Delete FROM Post WHERE postid='$postid'";
      $result=mysqli_query($con, $sql);
      if($result)
      {
      return true;
      }else{
      return false;
      }
      
      }

      
function check_username($username){
     require('dbconnection.php');
     $con = mysqli_connect(HOST, USER, PASS, DB);
       $sql="Select username FROM Login users WHERE username='$username'";
       $result=mysqli_query($con, $sql);
      if (mysqli_num_rows($result)){
      return true;
      }else{
      return false;
      }
      }
      
      
function comment_post($postid,$comment){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="INSERT INTO Comments (comment, postid) VALUES ('$comment', '$postid')";
       $result=mysqli_query($con, $sql); 
    if ($result){
      return true;
      }else{
      return false;
      }
      }
     

function show_comments($postid){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="Select * FROM Comments WHERE postid='$postid'";  
      $result=mysqli_query($con, $sql) or die(mysqli_error());
     if (mysqli_num_rows($result)){
      return $result;
      }else{
      return false;
      }
      }
      
      
/*---Functions for the like button---*/      
      
function add_like($postid,$userid){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="INSERT INTO Likes (userid, postid) VALUES ('$userid', '$postid')";
       $result=mysqli_query($con, $sql); 
    if ($result){
       return $true;
      }else{
      return false;
      }
      }     
      
      
function verify_like($postid,$userid){
require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="Select* FROM Likes WHERE postid='$postid' and userid='$userid'";  
      $result=mysqli_query($con, $sql);
     if (mysqli_num_rows($result)){
      return $true;
      }else{
      return false;
      }
      }       
            
      
function delete_like($postid,$userid){
     require('dbconnection.php');
      $con = mysqli_connect(HOST, USER, PASS, DB);
      $sql="Delete FROM Likes";
      }      
  
      
?>

 <a class="button" href="#show">Write a Review</a> 
				<div id="show">
					<form id="login" method="post" action="#">
						<fieldset>
							<legend>
							Write a review
							</legend>
							<label for="name">Name:</label>
							<input type="text" id="name">
							<label for="Comment">Comment:</label>
							<input type="text" id="comment">
							<br />
							<input type="submit" c;ass="button" value="review"/>
						</fieldset>
					</form>
				</div>		
				
				
				
				
				
					<form action='writereview.php' method='post' type='hidden' name='writebtn'>
     <input type='hidden' name='postid' value='".$row['postid']."'>
     <input type='submit' value='Write a Review' class='buttons' name='writebtn'></form>

     <button onclick="myFunction()">Write a Review</button>

	<p id="demo"></p>

	<script>
	function myFunction() {
    var x;
    var person = prompt("Please enter your name","Harry Potter");
    if (person != null) {
        document.getElementById("demo").innerHTML =
        "Hello " + person + "! How are you today?";
    }
}
</script>



					<?php echo $display; ?> 

				
						
					              