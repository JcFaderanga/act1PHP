<?php

$dbhost = "sql303.epizy.com";
$dbuser = "epiz_33859366";
$dbpass = "xgIctMrE9xDLrum";
$dbname = "epiz_33859366_db_data";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>