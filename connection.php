<?php

$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="lodin_page";
if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("failed to connect");
}
