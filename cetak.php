<?php
$servername="localhost";
$username="root";
$dbname="kontak_db";

include "koneksi.php";

$sql="SELECT * FROM tb_kontak ORDER BY nama;";
$qry=mysqli_query($sql) or die("Proses cetak gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr> 
     <th>No</th>
     <th>Nama</th>
     <th>Jenis Kelamin</th>
     <th>Email</th>
     <th>Alamat</th>
     <th>Kota</th>
     <th>Pesan</th>
     <th></th>
  </tr>";

  $no = 1;
  while ($hasil = mysqli_fetch_array($query)) {
  	echo "<tr>";

  	echo "<td>".$hasil['id']."</td>";
  	echo "<td>".$hasil['nama']."</td>";
  	echo "<td>".$hasil['jkel']."</td>";
  	echo "<td>".$hasil['email']."</td>";
  	echo "<td>".$hasil['alamat']."</td>";
  	echo "<td>".$hasil['kota']."</td>";
  	echo "<td>".$hasil['pesan']."</td>";
  	echo "</tr>";

$no++;
}
echo "</table>";
?>
<a href="kontak.html">Kembali</a> 