<?php
include("class/users.php");
$register = new users;
extract($_POST);
/*echo $n;*/
$img_name = $_FILES['img']['name'];
$tmp_name = $_FILES['img']['tmp_name'];
move_uploaded_file($tmp_name, "img/".$img_name);

$query = "insert into signup values('$n','$e','$p','$img_name')";
$query2 = "select email from signup where email = '$e' ";
/*$query = "Insert into signup values('$n','$e','$p')";*/

if(!filter_var($e, FILTER_VALIDATE_EMAIL)){
	$register->url("index.php?run=failure"); 
}
else if($register->exists_email($query2)){
	$register->url("index.php?run=already");
}
else if($register->signup($query))
{
	$register->url("index.php?run=success");
}

?>
