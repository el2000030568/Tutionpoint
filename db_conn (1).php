<?php

$sname= "localhost";
$unmae= "id19337895_login";
$password = "Lokeshkeerthi@143";

$db_name = "id19337895_tution";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}