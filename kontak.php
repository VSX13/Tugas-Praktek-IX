<html>
<head>
	<title>Kontak</title>	
</head>
<body>
	<h3>Form Kontak</h3>
	<form action="simpan_kontak.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jkel"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Kota</td>
				<td><input type="text" name="kota"></td>
			</tr>
			<tr>
				<td>Pesan</td>
				<td><textarea cols="90" rows="10" name="pesan"></textarea></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</table>
	</form>
</body>
</html>