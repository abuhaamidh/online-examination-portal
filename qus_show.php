<?php
session_start();
if(!isset($_SESSION['email'])){
   header("Location:index.php");
}
include("class/users.php");
$qus = new users;
$cat = $_POST['cat'];
//echo $cat;
if($cat <0){
	header("Location: home.php");
}
$qus->qus_show($cat);
$_SESSION['cat'] = $cat;
//echo "<pre>";
//print_r($qus->qus);
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

<div class="container">
	<div class = "col-sm-2"></div>
	<div class = "col-sm-8">
		  <h2>Online Examination in php</h2>  
		  <form method = "post"action = "answer.php">
		  <?php 
		  		foreach($qus->qus as $qust) {
		  	?>        
		  <table class="table table-bordered">
		    <thead>
		      <tr>
		        <th><?php echo $qust['question'];?></th>
		      </tr>
		    </thead>
		    <tbody>
		    	<?php if(isset($qust['ans1'])) {?>
		      <tr>
		        <td>1.&nbsp;<input type= "radio" value = "0" name = "<?php echo $qust['id']?>"/>&nbsp;<?php echo $qust['ans1'];?></td>
		       
		      </tr>
		  <?php } ?>
		  <?php if(isset($qust['ans2'])) {?>
		      <tr>
		        <td>2.&nbsp;<input type= "radio" value = "1" name = "<?php echo $qust['id']?>"/>&nbsp;<?php echo $qust['ans2'];?></td>
		       
		      </tr>
		       <?php } ?>
		      <?php if(isset($qust['ans3'])) {?>
		      <tr>
		        <td>3.&nbsp;<input type= "radio" value = "2"  name = "<?php echo $qust['id']?>"/>&nbsp;<?php echo $qust['ans3'];?></td>
		       
		      </tr>
		       <?php } ?>
		      <?php if(isset($qust['ans4'])) {?>
		      <tr>
		        <td>4.&nbsp;<input type= "radio" value = "3" name = "<?php echo $qust['id']?>"/>&nbsp;<?php echo $qust['ans4'];?></td>
		       
		      </tr>
		       <?php } ?>

		       <tr>
		        <td><input type= "radio" checked = "checked" style = "display:none" value = "4" name = "<?php echo $qust['id']?>"/></td>
		       
		      </tr>

		    </tbody>
		<?php } ?>
		  </table>
		  <center>
		  	<input type = "submit" value = "Submit Quiz" class = "btn btn-success">
		  </center><br>
		</form>
	</div>
	<div class = "col-sm-2"></div>
</div>

</body>
</html>
