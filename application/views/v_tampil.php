<!DOCTYPE html>
<html>
<head>
	<title>Mencoba</title>
</head>
<body>
	<center><h1>Mencoba</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nim</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
		<?php 
		$id = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $id++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->nim ?></td>
			<td><?php echo $u->alamat ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
                  		<?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>