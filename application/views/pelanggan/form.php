<form action="<?php echo site_url("Pelanggan/submit"); ?>" method="POST">
	<div class="form-group">
		<label for="Namapelanggan">Nama :</label>
		<input class="form-control" placeholder="Nama Pelanggan" type="text" name="pelanggan_nama" 
		value="<?php echo (isset($data_pelanggan[0]->pelanggan_nama)? $data_pelanggan[0]->pelanggan_nama:''); ?>">
	</div>

	<div class="form-group">
		<label for="emailpelanngan">Email :</label>
		<input class="form-control" placeholder="Email" type="email" name="pelanggan_email" 
		value="<?php echo (isset($data_pelanggan[0]->pelanggan_email)? $data_pelanggan[0]->pelanggan_email:''); ?>">
	</div>

	<div class="form-group">
		<label for="tlppelanngan">No Telepon :</label>
		<input class="form-control" placeholder="No Telepon" type="text" name="pelanggan_tlp"
		value="<?php echo (isset($data_pelanggan[0]->pelanggan_tlp)? $data_pelanggan[0]->pelanggan_tlp:''); ?>">
	</div>	

	<div class="form-group">
		<label for="alamatpelanggan">Alamat :</label>
		<textarea class="form-control" placeholder="Alamat" type="text" name="pelanggan_alamat"  rows="3"><?php echo (isset($data_pelanggan[0]->pelanggan_alamat)? $data_pelanggan[0]->pelanggan_alamat:''); ?>
		</textarea>
	</div>

	<input type="hidden" name="pelanggan_id" 
	value="<?php echo (isset($data_pelanggan[0]->pelanggan_id)? $data_pelanggan[0]->pelanggan_id:''); ?>">
	<button type="submit" class="btn btn-primary">Submit</button>
</form>