<?php
$servername="localhost";
$username="root";
$dbname="kontak_db";

include "koneksi.php";

if(isset($_POST['submit'])){
$nama=$_POST['nama'];
$jkel=$_POST['jkel'];
$email=$_POST['email'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$pesan=$_POST['pesan'];

$sql="INSERT INTO tb_kontak (nama,jkel,email,alamat,kota,pesan) VALUES ('$nama','$jkel','$email','$alamat','$kota','$pesan')";

$query = mysqli_query($conn, $sql);

if($query){
	header('location: kontak.html?status=sukses');
}else{
    echo "Proses simpan ke database gagal";
}
}else{
	die("error");
}
?>  