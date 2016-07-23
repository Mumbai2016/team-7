<?php
include "config.php";
$email = $_POST['email'];
$x="";
$count=0;
if(isset($_POST['careerAwareness'])){
	$x=$x."_"."careerAwareness";
	$count=$count+1;
}
if(isset($_POST['lsdp'])){
	$x=$x."_"."lsdp";
	$count=$count+1;
}
if(isset($_POST['lmsp'])){
	$x=$x."_"."lmsp";
	$count=$count+1;
}
if(isset($_POST['graduate'])){
	$x=$x."_"."graduate";
	$count=$count+1;
}
if(isset($_POST['dropout'])){
	$x=$x."_"."dropout";
	$count=$count+1;
}
if(isset($_POST['vocationtraining'])){
	$x=$x."_"."vocational";
	$count=$count+1;
}
if(isset($_POST['employee'])){
	$x=$x."_"."employed";
	$count=$count+1;
}
if(isset($_POST['married'])){
	$x=$x."_"."married";
	$count=$count+1;
}
if(isset($_POST['location'])){
	$x=$x."_"."Now in: ".$_POST['location'];
	$count=$count+1;
}

$email=$_POST['email'];
$query="select * from student_profile where email = '$email'";
$result=mysql_query($query);
$current_state="";
$m = date("d/m/y");
$da="";
for($i=0;$i<$count;$i++){
	$da = $da."_".$m;
}
$ff="";
while($row=mysql_fetch_array($result,MYSQL_ASSOC)){
	$current_state=$row['current_state'];
	$ff=$row['timestamp_upd'];
}
	$final = $current_state.$x;
	$final2 = $ff.$da;
	$query2 = "Update student_profile set current_state='$final', timestamp_upd='$final2' where email='$email'";

mysql_query($query2);

?>

















