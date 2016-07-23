
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

$datex = (explode("/",$sdate,3));

$dd="DAD_DAD".rand(1,20000);


    

         
    $sql="insert into student_profile(sid, first_name,last_name,st_date,st_month,st_year,age,mobile,father_mobile,mother_mobile,other_mobile,before_joining,skills,current_state,username,password,email)
	values('$dd','$fname','$lname','$datex[0]','$datex[1]','$datex[2]','$age','$pnumber','$fnumber','$mnumber','$onumber','$ques','$skills','$cstatus','$uname','$pswd','$email')";
    if(mysql_query($sql)){
		echo "Thank you for registering!";
}

?>
	
	
	

        
    
?>
   


