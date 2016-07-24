<?php

include "config.php";
$id=$_GET['user_id'];

$query = "Select * from student_profile where sid='$id'";
$result=mysql_query($query);


while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
	$x = $row['current_state'];

	$m = explode("_",$x);

	for($i=0;$i<count($m); $i++){ ?>
	
		<li>
			        <!-- begin timeline-time -->
			        <div class="timeline-time">
			            <span class="date">today</span>
			            <span class="time">04:20</span>
			        </div>
			        <!-- end timeline-time -->
			        <!-- begin timeline-icon -->
			        <div class="timeline-icon">
			            <a href="javascript:;"><i class="fa fa-paper-plane"></i></a>
			        </div>
			        <!-- end timeline-icon -->
			        <!-- begin timeline-body -->
			        <div class="timeline-body">
			            <div class="timeline-header">
			                <span class="userimage"><img src="assets/img/user-1.jpg" alt="" /></span>
			                <span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
			                
			            </div>
			            <div class="timeline-content">
                            <p>
                           <?php   echo  $m[$i];?>
                            </p>
			            </div>
			            <div class="timeline-footer">
			                <a href="javascript:;" class="m-r-15"><i class="fa fa-thumbs-up fa-fw"></i> Like</a>
			                <a href="javascript:;"><i class="fa fa-comments fa-fw"></i> Comment</a>
			            </div>
			        </div>
			        <!-- end timeline-body -->
			    </li>
	<?php 
		
		
		
	}
}
?>