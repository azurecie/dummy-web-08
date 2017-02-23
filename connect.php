<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b9bc219a82b850";
$pass = "3467554c";
$name = "rezabasebaru";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
