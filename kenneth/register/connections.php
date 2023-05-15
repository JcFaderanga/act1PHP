<?php

$dbhost = "sql110.epizy.com";
$dbuser = "epiz_33822561";
$dbpass = "r0wI5mj1TTabO";
$dbname = "epiz_33822561_Activity2";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>