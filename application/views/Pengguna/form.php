<form action="<?php echo site_url("Pengguna/submit"); ?>" method="POST">

	<div class="form-group">
		<label for="pengguna_level">level :</label>
		<?php echo form_dropdown('level', $user, '', 'class="custom-select"'); ?>
		<!-- <select class="form-control" placeholder="level pengguna" type="text" name="pengguna_level">
			<option value="<?php echo (isset($data_pengguna[0]->pengguna_level)? $data_pengguna[0]->pengguna_level:''); ?>">Pengguna</option>
			<option value="<?php echo (isset($data_pengguna[0]->pengguna_level)? $data_pengguna[0]->pengguna_level:''); ?>">Admin</option>
		</select> -->
	</div>

	<div class="form-group">
		<label for="Namapengguna">Nama :</label>
		<input class="form-control" placeholder="Nama Pengguna" type="text" name="pengguna_nama" 
		value="<?php echo (isset($data_pengguna[0]->pengguna_nama)? $data_pengguna[0]->pengguna_nama:''); ?>">
	</div>

	<div class="form-group">
		<label for="pengguna_divisi">Divisi :</label>
		<input class="form-control" placeholder="divisi pengguna" type="text" name="pengguna_divisi" 
		value="<?php echo (isset($data_pengguna[0]->pengguna_divisi)? $data_pengguna[0]->pengguna_divisi:''); ?>">
	</div>

	<input type="hidden" name="pengguna_id" 
	value="<?php echo (isset($data_pengguna[0]->pengguna_id)? $data_pengguna[0]->pengguna_id:''); ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>