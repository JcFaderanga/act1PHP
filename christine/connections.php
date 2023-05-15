<?php

$dbhost = "sql211.epizy.com";
$dbuser = "epiz_33878213";
$dbpass = "UxsTQRM5KWpiYgb";
$dbname = "epiz_33878213_data";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>