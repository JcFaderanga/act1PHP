<?php

$dbhost = "sql213.epizy.com";
$dbuser = "epiz_33853688";
$dbpass = "e5iExr3Gpxo1H1j";
$dbname = "epiz_33853688_webtech";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>