<?php
include "config.php";
session_start();
$_SESSION['username']="nirbhay";
$x = $_SESSION['username'];
$query = "Select * from student_profile where username='$x'";
$result = mysql_query($query);
while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo $row['sid']."<br/>";
	echo $row['username']."<br/>";
	echo $row['email']."<br/>";
	echo $row['first_name']."<br/>";
	echo $row['last_name']."<br/>";
	echo $row['st_date']."<br/>";
	echo $row['st_month']."<br/>";
	echo $row['st_year']."<br/>";
	echo $row['age']."<br/>";
	echo $row['mobile']."<br/>";
	echo $row['father_mobile']."<br/>";
	echo $row['mother_mobile']."<br/>";
    echo $row['other_mobile']."<br/>";
    echo $row['before_joining']."<br/>";
	echo $row['skills']."<br/>";
    echo $row['current_state']."<br/>";

	}
	

?>
