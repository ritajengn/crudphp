<!DOCTYPE html>
<html>
<head>
	<title>Mencoba Input</title>
</head>
<body>
	<center>
		<h1>Mencoba</h1>
		<h3>Tambah data baru</h3>
	</center>
	<form action="<?php echo site_url(). '/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Id</td>
				<td><input type="Text" name="id"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>	
</body>
</html>