<script>
    function myFunction() {
        alert("User not found");
    }
    </script>
<?php
include('config.php');
$_SESSION['logged']=false;
$email=$_POST['email'];
$password=$_POST['password'];
$sql="SELECT * FROM `users` WHERE `email`='$email' and `u_password`='$password'";
$res=mysql_query($sql);
if(mysql_num_rows($res)==
	session_start();
	echo "Login succesful.";
	header('Location:profile.php');
}
?>
<script type = "text/javascript">
                myFunction(); //calling my funtion
            window.location = "loginnew.php";
</script>
    
