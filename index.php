<!DOCTYPE html>
<html lang="en">

<head>
  <title>Online Exam</title>
  <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="gi.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

</head>

<br><br>
<div class="container">
    <div class = "row">
    	<div class = col-sm-2></div>
    	<div class = col-sm-8>
			<div class="panel panel-info">
		      <div class="panel-heading" ><h2>Welcome to Online Examination Portal</h2></div>
		      <div class="panel-body"><marquee><small style = "color:red">Notification : No. of vacancies - 12 posts</small></marquee></div>
		    </div>
		</div>
		<div class = col-sm-2></div>
	</div>
</div>
<br>
<div class="container">
  <div class = "row">
    <div class = col-sm-6>

      	<div id = "sign223" class = "panel-heading"style = "width:100%;background-color: #76D7C4">
	    	 <p><strong>Are You Registerd User?</strong></p>
	    	 <button type="submit" class="btn btn-success" onclick = "sign222()">Login</button>
	    	 <br><br>
	    	 <?php
            	if(isset($_GET['run']) && $_GET['run']=="failed")
            	{
            		echo "<p style = 'color:#E74C3C';>Your email or password is not correct</p>";
            	}
            	?>
    	</div>

        <div class="panel panel-primary" id = "log" style="display:none;background-color:#76D7C4;width:100%;">
        	<div class="panel-heading">
            	Login Form
            </div>

            <div class = "panel-body">
            	
	            <form role = "form" action = "login.php" method = "post">
	              <div class="form-group">
	                <label for="email"><i class="far fa-envelope"></i>    Email:</label>
	                <input type="text" class="form-control" name = "e" id="email" placeholder="Enter email" required>
	              </div>
	              <div class="form-group">
	                <label for="pwd"><i class="fas fa-key"></i>    Password:</label><br>
	                <div style =  "display : inline-block">
	                <input type="password" class="form-control" name ="p" id="pwd2" required></div>
	                <div style =  "display : inline-block;"><img src="https://i.stack.imgur.com/Oyk1g.png" onclick="show2()" id="EYE2" placeholder="Enter password" title="show password"></div>
	              
	              </div>
	              
	              <button type="submit" class="btn btn-success">Login</button>
	            </form>
	        </div>

        </div>
    </div>

    

    <div class = col-sm-6>
    	
	
			    <div id = 'sign2' class = 'panel-heading' style = 'width:100%;background-color:#76D7C4'>
				    	 <p><strong>Are You New User?</strong></p>
				    	 <button type='submit' class='btn btn-success' onclick = 'sign22()'>Signup</button>
				    	 <br><br>
				    	 <?php 
            		if(isset($_GET['run'])&&$_GET['run']=="success")
		            	{
		            		echo "<div class='alert alert-success alert-dismissible'>";
		            		echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
		            		echo "<p style = 'color:#239B56';>Your registration is successfully done</p>.";
		            		echo "</div>";
		            		/*echo "<p style = 'color:#239B56';>Your registration is successfully done</p>";*/
		            	}
		            if(isset($_GET['run'])&&$_GET['run']=="failure")
		            	{

		            		echo "<div class='alert alert-danger alert-dismissible'>";
		            		echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
		            		echo "<p style = 'color:#E74C3C';>Your Email is not in correct format</p>";
		            		echo "</div>";
		            		/*echo "<p style = 'color:#E74C3C';>Your Email is not in correct format</p>";*/
		            	}
		            if(isset($_GET['run'])&&$_GET['run']=="already")
		            	{
		            		echo "<div class='alert alert-danger alert-dismissible'>";
		            		echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
		            		echo "<p style = 'color:#E74C3C';>Email is already taken</p>";
		            		echo "</div>";
		            		/*echo "<p style = 'color:#E74C3C';>Email is already taken</p>";*/
		            	}
            	?>
			    	</div>
			   

        <div class="panel panel-primary" id ="sign"style="display:none;background-color:#76D7C4;width:100%;">
            <div class="panel-heading ">
            	Sign up Form
            </div>

            <div class = "panel-body">
            	
	            <form role = "form" method = "post" action ="signup.php" enctype ="multipart/form-data">
	            	<div class="form-group">
		                <label for="name"><i class="fa fa-address-book"></i>  Name:</label>
		                <input type="text" class="form-control" name = "n" id="name" placeholder="Enter name" required>
	                </div>
	                <div class="form-group">
		                <label for="email"><i class="far fa-envelope"></i>    Email:</label>
		                <input type="text" class="form-control" name = "e" id="email" placeholder="Enter email" required>
	              	</div>
	                <div class="form-group">
		                <label for="pwd"><i class="fas fa-key"></i>    Password:</label><br>
		                <div style =  "display : inline-block">
		                <input type="password" class="form-control" name = "p" id="pwd" placeholder="Enter password" required minlength="8" maxlength="15"></div>
		                <div style =  "display : inline-block;"><img src="https://i.stack.imgur.com/Oyk1g.png" onclick="show()" title = "show password"id="EYE" placeholder="Enter password"></div>
	                </div>  

	                <div class="form-group">
		                <label for="name">Upload your Image :</label>
		                <input type="file" class="form-control" name = "img" id="file" >
	                </div>
	                <button type="submit" class="btn btn-success">Signup</button>
	            </form>
	        </div>

        </div>
    </div>

  </div>
</div>

</body>
<script>
	function show() {
		var a=document.getElementById("pwd");
		var b=document.getElementById("EYE");
		if (a.type=="password")  {
		a.type="text";
		b.src="https://i.stack.imgur.com/waw4z.png";
		}
		else {
		a.type="password";
		b.src="https://i.stack.imgur.com/Oyk1g.png";
		}
		
	}

	
	function show2() {
		var a=document.getElementById("pwd2");
		var b=document.getElementById("EYE2");
		if (a.type=="password")  {
		a.type="text";
		b.src="https://i.stack.imgur.com/waw4z.png";
		}
		else {
		a.type="password";
		b.src="https://i.stack.imgur.com/Oyk1g.png";
		}
	}
		function sign22(){
			document.getElementById("sign2").style.display = "none";
			document.getElementById("sign").style.display = "inline-block";
			document.getElementById("sign223").style.display = "inline-block";
			document.getElementById("log").style.display = "none";
		}
	

	function sign222(){
		document.getElementById("sign223").style.display = "none";
		document.getElementById("log").style.display = "inline-block";
		document.getElementById("sign").style.display = "none";
		document.getElementById("sign2").style.display = "inline-block";
	}
</script>

</html>

