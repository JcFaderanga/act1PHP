<?php

$dbhost = "sql313.epizy.com";
$dbuser = "epiz_33868861";
$dbpass = "ebTSsA2pVX2";
$dbname = "epiz_33868861_rhai";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>