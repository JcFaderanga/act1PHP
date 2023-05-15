<?php

$dbhost = "sql300.epizy.com";
$dbuser = "epiz_33878709";
$dbpass = "TsF9DCwpEE";
$dbname = "epiz_33822561_Activity2";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>