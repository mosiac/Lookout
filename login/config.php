<?php
$mysql_hostname = "localhost";
$mysql_user = "bluegape_hu";
$mysql_password = "jiggly";
$mysql_database = "bluegape_hu";

$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

?>