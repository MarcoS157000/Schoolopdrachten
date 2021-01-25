<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "bestevaer";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
