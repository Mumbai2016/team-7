<?php


$cid =mysql_select_db('dad_db',$connect); //specify db name

define('CSV_PATH','C:\\Users\\Priya\\Desktop\\'); // specify CSV file path

$csv_file = CSV_PATH . "LMSP Metrics for June 2014-15_Delimited.csv"; // Name of your CSV file
$csvfile = fopen($csv_file, 'r');
$theData = fgets($csvfile);
$i = 0;
while (!feof($csvfile))
{
   $csv_data[] = fgets($csvfile, 1024);
   $csv_array = explode("|", $csv_data[$i]);
   $insert_csv = array();
   $insert_csv['ID'] = $csv_array[0];
   $insert_csv['fname'] = $csv_array[1];
   $insert_csv['lname'] = $csv_array[2];
   $insert_csv['gender'] = $csv_array[4];
   $insert_csv['age'] = $csv_array[6];
   $insert_csv['pnumber'] = $csv_array[7];
   $insert_csv['fnumber'] = $csv_array[8];
   $insert_csv['mnumber'] = $csv_array[9];
   $insert_csv['onumber'] = $csv_array[10];
   $insert_csv['s_date'] = $csv_array[11];
   $insert_csv['before_joining'] = $csv_array[13];
   
   
   $datex = (explode("-",$insert_csv['s_date'],3));
   
   $query = "INSERT INTO student_profile(sid,first_name,last_name,st_date,st_month,st_year,age,mobile,father_mobile,mother_mobile,other_mobile,before_joining,skills,current_state,username,password,email,timestamp_upd,location,gender) VALUES('" . $insert_csv['ID'] ."','" . $insert_csv['fname']."', '".$insert_csv['lname']."','".$datex[0]."','".$datex[1]."','".$datex[2]."','".$insert_csv['age']."','".$insert_csv['pnumber']."', '".$insert_csv['fnumber']."','". $insert_csv['mnumber']."', '".$insert_csv['onumber']."','".$insert_csv['before_joining']."','Computers','Employed','priya','holani','priyaholani@gmail.com','','Mumbai','".$insert_csv['gender']."')";
   
  // INSERT INTO student_profile(sid,first_name,last_name,st_date,st_month,st_year,age,mobile,father_mobile,mother_mobile,other_mobile, before_joining,skills,current_state,username,password,email,timestamp_upd,location,gender) VALUES('DC001','Afreen','K','07','10','2012','21 Years ','asd','hj','gjn','+919845955105', 'fmk','Computers','Employed','priya','holani','priyaholani@gmail.com','','Mumbai','Female');
	 
	echo ($query);
	 
   $n=mysql_query($query, $connect );
   $i++;
}
fclose($csvfile);
echo "File data successfully imported to database!!";
mysql_close($connect); // closing connection
?>