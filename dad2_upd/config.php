<?php 
$dbDatabase = "dad_db";
$dbServer = "localhost";
$dbUser = "root";
$dbPass = "";
$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");
$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");
?>