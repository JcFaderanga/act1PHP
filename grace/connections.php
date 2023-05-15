<?php

$dbhost = "sql109.epizy.com";
$dbuser = "epiz_33837319";
$dbpass = "b6ENfpE8rR";
$dbname = "epiz_33837319_graceMapagMahalWalangBisyoSiAlvinLang";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
?>