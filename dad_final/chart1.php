<?php 

include "config.php";
$queryx="select count(*) as count from student_profile";
$resultx=mysql_query($queryx);

if(isset($_GET['column'])){
	$jk = $_GET['column'];
	$query="select count(*) as count from student_profile group by $jk";
}
if(isset($_GET['status'])){
	$jk1 = $_GET['status'];
$query="select count(*) as count from student_profile where current_state like '%$jk1%'";
}

$result=mysql_query($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$co = 0;
while($row2 = mysql_fetch_array($resultx, MYSQL_ASSOC)){
	$co = $row2['count'];
}
	
	?>
	
	
<div class="container">
  <h2>Your Stats</h2>
  <p></p>
  <?php 
while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
	$x = ($row['count'])*200+50;
	$y= $row['count'];
	$width=ceil(($y/$co)*100);
	$width="width:".$width."%";
	
	
	?>
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $y; ?>" aria-valuemin="0" aria-valuemax="100" style="<?php echo $width; ?>">
      <?php echo $y; ?>
    </div>
  </div>
<?php } ?>
</div>

</body>
</html>