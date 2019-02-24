<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pelanggan</title>
</head>
<body>
	<table border="0" class="table table-hover">
	<thead>
		<tr class="table-active">
			<th>NO</th>
			<th>Nama Pelanggan</th>
			<th>Email</th>
			<th>Telpon</th>
			<th>Alamat</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php $no = 1;
		foreach ($pelanggan as $value) { ?>
		<tr class="table-dark">
			<td><?php echo $no++; ?></td>
			<td><?php echo  $value->pelanggan_nama; ?></td>
			<td><?php echo  $value->pelanggan_email; ?></td>
			<td><?php echo  $value->pelanggan_tlp; ?></td>
			<td><?php echo  $value->pelanggan_alamat; ?></td>
			<td>
				<a class="btn btn-warning btn-link" href="<?php echo site_url('Pelanggan/hapus_pelanggan/').$value->pelanggan_id; ?>" onclick="return confirm('are you sure?')">Delete</a>
				<a class="btn btn-warning btn-link" href="<?php echo site_url('Pelanggan/edit_pelanggan/').$value->pelanggan_id; ?>">Edit</a>
			</td>
		</tr>
		 <?php } ?>
			
	</tbody>
	</table>
</body>
</html>