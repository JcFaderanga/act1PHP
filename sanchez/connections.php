<?php
$dbhost = "sql304.epizy.com";
$dbuser = "epiz_33877609";
$dbpass = "vYZRvpLf4y9vsi";
$dbname = "epiz_33877609_crud";

if(!$connections = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect!");
}
?>