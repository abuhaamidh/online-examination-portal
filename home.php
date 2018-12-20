<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:index.php");
}
include("class/users.php");
$profile = new users;
$email = $_SESSION['email'];

$profile->users_profile($email);
//print_r($profile->data);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="g.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
</head>
	
<body>

<div class="container">
  <center><h2 style="color:green">Welcome! Online Examination</h2></center>
  <hr>
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">Profile</a></li>
    <li style = "float:right"><a href="logout.php">Log Out</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
    	<br>
      <strong><h4>Instructions : </h4></strong>
      <p>1. There are different categories of languages and you can take test of any language.</p>
      <p>2. There are 10 minutes to solve 10 questions of each category.</p>
      <p>3. There is <strong>no</strong> negative marking scheme.</p>
      <center><button type="button" class="btn btn-primary" data-toggle = "tab" href = "#select">Start Quiz</button></center>

      <!--<form>
      <label for="sel2">Mutiple select list (hold shift to select more than one):</label>-->
      <div class= "row">
		      <div class = "col-sm-4"></div>
		      <div class = "col-sm-4"><br>
		        <div id = "select" class = "tab-pane fade">
		          <form method = "post" action="qus_show.php" >
			      <select class="form-control" id ="" name = "cat">
			      	<option value = "-1">Select Category</option>
			      	<?php			      	
			      		$profile->cat_shows();
			      		foreach($profile->cat as $category)
			      			{ 
			      	?>
			      	<option value ="<?php echo $category['id'] ?>"><?php  echo $category['cat_name'];?></option>
			      <?php } ?>
			      </select><br>

			      <center><input type = "submit" value="submit" class = "btn btn-primary"/></center>
			     </form>

			    </div>
			</div>
			<div class = "col-sm-4"></div><br>
	  </div>
      <form method ="post" action ="admin.php">
      <input type = "submit" value ="Admin Panel Only for Administrator">
    </form>
	  <hr>
	
    </div>
   
    <div id="menu1" class="tab-pane fade">
      <h3 style="color: 	#FF6347">Showing Profile</h3>
    <table class="table table-bordered">
    <thead>
      <tr>
        <!--<th>id</th>-->
        <th >Name</th>
        <th>Email</th>
        <th>Image</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
    	<?php
    	foreach($profile->data as $prof)
    	{
    	?>
    	<tr>
	        <!--<td><?php// echo $prof['id'];?> </td>-->
	        <td ><?php echo $prof['name'];?> </td>
	        <td><?php echo $prof['email'];?> </td>
	        <td><img src = "img/<?php echo $prof['tmp_name']; ?>" alt="" width ="35px" height = "30px" /></td>
	        
	        <td> <a href = "edit.php"><i class="far fa-edit" id = "ed"></i></a></td>
        </tr>	
    </tbody>
	<?php } ?>
    </table>

    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Coming Soon.........</p>
    </div>
  </div>
</div>

</body>
</html>
