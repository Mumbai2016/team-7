
<?php
include "config.php";
session_start();
$_SESSION['username']="nirbhay";
$x=$_SESSION['username'];
$check = $_POST['submit_btn'];
	$a=$_POST['first_name'];
	$b=$_POST['last_name'];
	$c=$_POST['st_date'];
	$d=$_POST['st_month'];
	$e=$_POST['st_year'];
	$f=$_POST['age'];
	$g=$_POST['mobile'];
	$h=$_POST['father_mobile'];
	$i=$_POST['mother_mobile'];
    $j=$_POST['other_mobile'];
    $k=$_POST['before_joining'];
	$l=$_POST['skills'];
    $m=$_POST['current_state'];

if(isset[$check]){
	$query2 = "UPDATE `student_profile` SET `first_name`='$a',`last_name`='$b',`st_date`='$c',`st_month`='$d',
`st_year`='$e',`age`='$f',`mobile`='$g',`father_mobile`='$h',`mother_mobile`='$i',
`other_mobile`='$j',`before_joining`='$k',`skills`='$l',`current_state`='$m' WHERE id=$x";

mysql_query($query2);
}

?>