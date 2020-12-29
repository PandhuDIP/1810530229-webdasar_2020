<?php
$dbhost ="localhost";
$dbuser ="root";
$dbpass ="";
$dbname ="web_d";

$link = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$link){
	die ("Koneksi dengan databases gagal : ".mysqli_connect_errno().
		"_".mysqli_connect_error());
}
?>