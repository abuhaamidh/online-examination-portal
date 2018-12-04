<?php
session_start();

	$host = "localhost";
	 $username = "sammy";
	 $pass = "Pkp82@82";
	$db_name = "exam";
	
	
$q = $_POST["qus"];
$a0 = $_POST["ans0"];
$a1= $_POST["ans1"];
$a2= $_POST["ans2"];
$a3= $_POST["ans3"];
$a= $_POST["ans"];
$w = $_SESSION['cated'];
$connection = mysqli_connect($host,$username,$pass,$db_name);
    $query = "INSERT INTO questions(question,ans1,ans2,ans3,ans4,ans,cat_id) VALUES ('$q','$a0','$a1','$a2','$a3','$a','$w')";
    mysqli_query($connection,$query);
    $check = 1;
    $_SESSION['counting']  = $check;
  	header("Location: ../qus_in.php");
?>
