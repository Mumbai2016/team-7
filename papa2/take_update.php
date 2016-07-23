<?php
include "config.php";
$email = $_POST['email'];
$x="";
if(isset($_POST['careerAwareness'])){
	$x=$x."_"."careerAwareness";
}
if(isset($_POST['lsdp'])){
	$x=$x."_"."lsdp";
}
if(isset($_POST['lmsp'])){
	$x=$x."_"."lmsp";
}
if(isset($_POST['graduate'])){
	$x=$x."_"."graduate";
}
if(isset($_POST['dropout'])){
	$x=$x."_"."dropout";
}
if(isset($_POST['vocationtraining'])){
	$x=$x."_"."vocational";
}
if(isset($_POST['employee'])){
	$x=$x."_"."employed";
}
if(isset($_POST['married'])){
	$x=$x."_"."married";
}
if(isset($_POST['location'])){
	$x=$x."_"."Now in: ".$_POST['location'];
}

$email=$_POST['email'];
$query="select * from student_profile where email = '$email'";
$result=mysql_query($query);
$current_state="";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
	$current_state=$row['current_state'];
}
	$final = $current_state.$x;
	
	$query2 = "Update student_profile set current_state='$final' where email='$email'";

mysql_query($query2);

?>

















