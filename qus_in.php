<?php
session_start();
include("class/users.php");
$profiles = new users;
/*echo $_POST['cate'];*/
$cates = $_POST["cate"];
$_SESSION['cated'] = $cates;
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

<body>
<br><br>

<center><?php echo "Welcome ".$email; ?></center>
<center><button ><a href = "logout.php">logout</a></button></center>
<br><br>
<div id = "email">

  <form method = "post" action="qus_in.php" >
	
  </form>
</div>

<!--for($i=0;$i<$nomber;$i++)-->


  	<div class = "panel-body">
    <form role = "form" action = "class/users2.php" method = "post">
				              <div class="form-group">
				                <label for="email"> Question :</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "qus"placeholder="Enter Question" required></div>
				              </div>

				              <div class="form-group">
				                <label for="email"> Option 1:</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "ans0"  placeholder="Enter Option A" required></div>
				              </div>

				              <div class="form-group">
				                <label for="email"> Option 2:</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "ans1" placeholder="Enter Option B" required></div>
				              </div>

				              <div class="form-group">
				                <label for="email"> Option 3:</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "ans2" placeholder="Enter Option C" required></div>
				              </div>

				              <div class="form-group">
				                <label for="email"> Option 4:</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "ans3" placeholder="Enter Option D" required></div>
				              </div>
				              
				              <div class="form-group">
				                <label for="email"> Answer:</label>
				                <div style =  "display : inline-block">
				                <input type="text" class="form-control" name = "ans" placeholder="Enter Correct answer" required></div>
				              </div>
				             <center><input type = "submit" value="Enter" class = "btn btn-primary"/></center>

	            </form>
	
		<hr>
		<br>

</div>

  </table>
</body>

</html>
