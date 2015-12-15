<?php
$db="aosdb";
$link = mysql_connect("localhost", "root", "root");
if (! $link) die("Couldn't connect to MySql");
mysql_select_db($db);
print "Connected to DB";
?>