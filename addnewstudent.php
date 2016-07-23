
<?php
include "config.php";
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$sdate=$_POST['sdate'];
$age=$_POST['age'];
$pnumber=$_POST['pnumber'];
$fnumber=$_POST['fnumber'];
$mnumber=$_POST['mnumber'];
$onumber=$_POST['onumber'];
$ques=$_POST['ques'];
$skills=$_POST['skills'];
$cstatus=$_POST['cstatus'];
$uname=$_POST['username'];
$pswd=$_POST['pswd'];
$email=$_POST['email'];

$date = (explode("/",$sdate,3));




  

         
    $sql="insert into student_profile(first_name,last_name,st_date,st_month,st_year,age,mobile,father_mobile,mother_mobile,other_mobile,before_joining,skills,current_state,username,password,email)
	values('$fname','$lname','$date[0]','$date[1]','$date[2]','$age','$pnumber','$fnumber','$mnumber','$onumber','$ques','$skills','$cstatus','$uname','$pswd','$email')";
    mysql_query($sql);
    header('location:profile.php');//if the ''if'' loop returns true it heads on to this page, and doesnt go ahead 

        
    
?>
   


