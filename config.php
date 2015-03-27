<?php
###Connect to database###
$dbhost ="127.0.0.1";
$dbname = "social";
$user = "root";
$pass = "secure#toor";

#
# On Server: username/dbname: socialnetdatab
# Password: Social-net-db1 
#

	$conc = mysql_connect($dbhost, $user, $pass) or die("Unable to connect to MySQL");
mysql_select_db("social") or die('Could not connect: ' . mysql_error());

#$conc = new PDO('mysql:host=localhost;dbname=social', $user, $pass);
?>
