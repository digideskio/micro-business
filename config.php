<?php
include "/var/www/html/system/common.php";

$dbserver = "[database server]";
$dbname = "[database]";
$dbuser = "[[user]]";
$dbpassword = "[pass]";

// Make a database connection
mysql_connect($dbserver,$dbuser,$dbpassword) or die('Could not connect: ' . mysql_error());
mysql_select_db($dbname);

$datastore = "mysql"; // mysql or github JSON currently

$githubroot = "https://raw.github.com/ongithub/";
?>