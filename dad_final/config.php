<?php 
$dbDatabase = "dad_db";
$dbServer = "127.0.0.1";
$dbUser = "root";
$dbPass = "root";
$sConn = mysql_connect($dbServer, $dbUser, $dbPass) or die("Couldn't connect to database server");
$dConn = mysql_select_db($dbDatabase, $sConn) or die("Couldn't connect to database $dbDatabase");
?>