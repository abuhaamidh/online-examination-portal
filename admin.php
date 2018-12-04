<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:index.php");
}
include("class/users.php");
$profile = new users;
$email = $_SESSION['email'];


?>

<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
	#categories:hover{
			cursor: pointer;
	}
</style>
<body>

<div class="container">
	<div class = "col-sm-2"></div>
	<div class = "col-sm-8">
		  <center><h2>Admin Panel for Online Examination</h2>  </center>
		
	


<!-- category of language-->
<center><button type="button" class="btn btn-primary" data-toggle = "tab" href = "#select">Select Language</button></center>
<div class= "row">
		      <div class = "col-sm-4"></div>
		      <div class = "col-sm-4"><br>
		        <div id = "select" class = "tab-pane fade">
		          <form method = "post" action="qus_in.php">
			      <select class="form-control" id ="categories"  name = "cate">
			      	<option value = "-1">Select Category</option>
			      	<?php			      	
			      		$profile->cat_shows();
			      		foreach($profile->cat as $category)
			      			{ 
			      	?>
			      	<option value ="<?php echo $category['id'] ?>"><?php  echo $category['cat_name'];?></option>
			      <?php } ?>
			      </select><br>

			      <center><input type = "submit" value="Start" class = "btn btn-primary"/></center>
			     </form>

			    </div>
			</div>
			<div class = "col-sm-4"></div><br>
	  </div>
		 



	
	</div>

	<div class = "col-sm-2"></div>
</div>

</body>
</html>
