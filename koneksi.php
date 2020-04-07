<?php
$servername="localhost";
$username="root";
$dbname="kontak_db";

mysqli_connect($servername, $username, $dbname) or die("Koneksi gagal dibangun");
mysqli_select_db("kontak_db") or die("Database tidak dapat dibuka"); 
?>